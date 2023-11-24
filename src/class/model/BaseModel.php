<?php

namespace src\class\model;

use src\class\model\DataBase;
use \PDO;
use \ReflectionObject;

/**
 * Classe mère abstraite qui a vocation a être héritée par chaque model d'entité
 * @author Wilbert G
 */
abstract class BaseModel
{

    private static function getClassName()
    {
        $calledClass = get_called_class();
        $className = basename(str_replace('\\', '/', $calledClass));
        return " " . strtolower(str_replace('Model', '', $className)) . " ";
    }

    /**
     * Récupère l'ensemble des données d'une entité
     * @return array
     * @author Wilbert G
     */
    public static function showAll()
    {

        // Etabli la connexion à la base de données
        $db = Database::getIntance()->db;

        //contien requette qui seras executer avec PDO
        // on stocke dans la variable $class le nom de la classe filtré, c'est à dire sans son namespace et sans le suffixe model 
        $req = "SELECT * FROM" . self::getClassName();

        // Preparation de la requête
        $prepared = $db->prepare($req);

        // Stocke le statut de l'execution
        $status = $prepared->execute();

        // Contrôle le statut de l'execution (si tout s'est bien passé ou non)
        if ($status != false) {
            // Récupèrer l'ensemble des résultats et les stocke dans la variable $results
            $results = $prepared->fetchAll(PDO::FETCH_ASSOC);
        } else {
            // Stocke l'erreur dans un tableau d'erreur
            $results = ["Fatal error" => "Une erreur est survenue lors de l'execution de la requête"];
        }

        return $results;
    }

    // Récupération complète d'une ligne d'une table en fonction d'un ID passé en paramètres 
    public function findById($id)
    {
        $req = "SELECT * FROM" . self::getClassName() . "WHERE id = :id";
        $db = Database::getIntance()->db;
        $prepared = $db->prepare($req);
        $prepared->bindValue(':id', $id, PDO::PARAM_INT);
        $prepared->execute();
        $results = $prepared->fetch(PDO::FETCH_ASSOC);

        if ($results != false) {
            foreach ($results as $cle => $valeur) {
                $this->$cle = $valeur;
            }
        }

        return $results;
    }
    public function delete($id)
    {
        $req = "DELETE FROM " . self::getClassName() . "WHERE id = :id";

        $db = Database::getIntance()->db;
        $prepared = $db->prepare($req);
        $prepared->bindValue(':id', $id, PDO::PARAM_INT);
        $status = $prepared->execute();
        return $status;
    }
    public function insert()
    {
        $db = Database::getIntance()->db;
        $reflexion = new ReflectionObject($this);

        // Récupère l'ensemble des propriétés
        foreach ($reflexion->getProperties() as $propriete) {

            // Stocke la valeur de chaque propriété
            $valeur = $propriete->getValue($this);

            // Contrôle que la propriété n'est pas vide
            if (!empty($valeur)) {

                // Si tel est le cas, on stocke sous forme de tableau le nom de la propriété sa valeur & son type
                $proprietesNonVides[$propriete->getName()] = $valeur;
                $proprietesType[$propriete->getName()] = $propriete->getType();
            }
        }
        $prop = "";
        $val = "";
        //
        $i = 1;
        // Pour chaque propriété de l'objet renseignées
        foreach ($proprietesNonVides as $champ => $valeur) {
            // Je mets de virgules tout le temps
            // Et quand c'est le dernier, j'enlève le dernier caractère (qui est forcément une virgule)
            $prop .= "`$champ`,";
            $val .= ":value$i,";
            $i++;
        }
        // On supprime la dernière virgule (des dernières propriétés & valeurs de la requête) 
        $prop = rtrim($prop, ',');
        $val = rtrim($val, ',');
        $j = 1;
        $req = "INSERT INTO " . self::getClassName() . "($prop) VALUES ($val)";
        $prepared = $db->prepare($req);
        foreach ($proprietesNonVides as $champ => $valeur) {
            $property = $reflexion->getProperty($champ)->getType()->getName();
            switch ($property) {
                case "string":
                    $prepared->bindValue(':value' . $j, $this->$champ, PDO::PARAM_STR);
                    break;
                case "int":
                    $prepared->bindValue(':value' . $j, $this->$champ, PDO::PARAM_INT);
                    break;
            }
            $j++;
        }
        $status = $prepared->execute();
        return $status;
    }
    public function update($id)
    {
        $db = Database::getIntance()->db;
        $reflection = new ReflectionObject($this);
    
        // Récupère l'ensemble des propriétés
        foreach ($reflection->getProperties() as $property) {
    
            // Stocke la valeur de chaque propriété
            $value = $property->getValue($this);
    
            // Contrôle que la propriété n'est pas vide
            if (!empty($value)) {
    
                // Si tel est le cas, on stocke sous forme de tableau le nom de la propriété, sa valeur & son type
                $nonEmptyProperties[$property->getName()] = $value;
                $propertyTypes[$property->getName()] = $property->getType();
            }
        }
    
        $updateString = "";
    
        // Pour chaque propriété de l'objet renseignée
        foreach ($nonEmptyProperties as $field => $value) {
            // On construit la partie "champ=:valeur"
            $updateString .= "`$field`=:$field,";
        }
    
        // On supprime la dernière virgule (des dernières propriétés de la requête)
        $updateString = rtrim($updateString, ',');
    
        // On commence à construire la requête SQL
        $query = "UPDATE " . self::getClassName() . " SET $updateString WHERE id=$id";
    
        // On prépare la requête
        $prepared = $db->prepare($query);
    
        // On bind les valeurs
        foreach ($nonEmptyProperties as $field => $value) {
            $property = $reflection->getProperty($field)->getType()->getName();
            switch ($property) {
                case "string":
                    $prepared->bindValue(":$field", $value, PDO::PARAM_STR);
                    break;
                case "int":
                    $prepared->bindValue(":$field", $value, PDO::PARAM_INT);
                    break;
            }
        }
    
        // On bind la valeur de l'ID (assumant que votre classe a une propriété "id")
        /* 
        $prepared->bindValue(":id", $this->$id, PDO::PARAM_INT); */
        var_dump($prepared);
        // Exécute la requête
        $status = $prepared->execute();
    
        return $status;
    }
    
}
