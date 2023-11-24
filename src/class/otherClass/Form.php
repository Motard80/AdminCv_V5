<?php

namespace src\class\otherClass;
/**
 * class form
 * permet de générer un formulaire
 */
class Form
{ 
    /**
     * @var array données utilisée par le formulaire
     */
    private $data;
    /**
     * @var string  $data données à utiliser pour construire le formulaire
     */
    public $surrond ='div';
    /**
     * @var string 
     */
    public $surrondDiv = 'p';
    /**
     * @param array $data 
     */
    public function __construct($data=array())
    {
        $this->data = $data;
    }
 
    /**
     * surrond
     *
     * @param  mixed $html
     * @return void
     */
    private function surrond($html){
        return "<{$this->surrond}>$html</{$this->surrond}>";
    }
        
    /**
     * surrond2
     *
     * @param  mixed $html
     * @return void
     */
    private function surrond2($html){
        return "<{$this->surrond}>$html</{$this->surrond}>";
    }
    
    /**
     * getValue
     *
     * @param  mixed $index
     * @return void
     */
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    
    /**
     * inputText
     *
     * @param  mixed $error
     * @param  mixed $name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @return void
     */
    public function inputText( $error, $name, $id, $msgLabel){

       return $this->surrond( '<label for="'.$id.'">'.$msgLabel.' :  </label>'
       . '<input type="text" id="'.$id.'" value="'.$this->getValue($name).'" name="'.$name.'" required>'
    );
    }
    
    
    /**
     * inputemail
     *
     * @param  mixed $error
     * @param  mixed $name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @return void
     */
    public function inputemail( $error, $name, $id, $msgLabel){

        return $this->surrond( '<label for="'.$id.'">'.$msgLabel.': </label>'
        . '<input type="email" id="'.$id.'" value="'.$this->getValue($name).'" name="'.$name.'" required> <br/>'
        . '<p class="text-danger" id="Error'.$error.'"><?= isset($formError['.$error.']) ? $formError['.$error.'] : \'\' ?></p>'
     );
     }
    
    
    /**
     * inputPwd
     *
     * @param  mixed $error
     * @param  mixed $name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @return void
     */
    public function inputPwd( $error, $name, $id, $msgLabel){

        return $this->surrond( '<label for="'.$id.'">'.$msgLabel.' : </label>'
        . '<input type="password" id="'.$id.'" value="'.$this->getValue($name).'" name="'.$name.'" required>'
        . '<p class="text-danger" id="Error'.$error.'"><?= isset($formError['.$error.']) ? $formError['.$error.'] : \'\' ?></p>'
     );
     }
         
    /**
     * submit
     *
     * @param  mixed $valus
     * @param  mixed $id
     * @param  mixed $name
     * @return void
     */
    public function submit($valus, $id, $name){
        
        return $this->surrond( '<input type="submit" name="'.$name.'" id="'.$id.'" value="'.$valus.'">');
    }
        
    /**
     * date
     *
     * @param  mixed $name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @return void
     */
    public function date( $name, $id, $msgLabel){
        return $this->surrond('<label for"'.$id.'">'.$msgLabel.': </label> '
        .'<input type="date" name="'.$name.'" id="'.$id.'" >');
    }
    
    /**
     * error
     *
     * @param  mixed $error
     * @return void
     */
    public function error($error){
        return $this->surrond('<p class="text-danger" id="Error'.$error.'"><?= isset($formError['.$error.']) ? $formError['.$error.'] : \'\' ?></p>');
    }    
    /**
     * checkbox
     *
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @return void
     */
    public function checkbox($id, $msgLabel){
        return $this->surrond('<label for"'.$id.'">'.$msgLabel.': </label> '
        .'<input type="checkbox" id="'.$id.'">');
    }
    /**
     * inputUdateText
     *
     * @param  mixed $name retourne la valeur de name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @param  mixed $value
     * @return void
     */
    public function inputUdateText($name, $id, $msgLabel, $value){
        return $this->surrond( '<label for="'.$id.'">'.$msgLabel.' : </label>'
        . '<input type="password" id="'.$id.'" value="'.$this->getValue($name).'" name="'.$name.'"  placeholder="'.$value.'" >');
    }    
    /**
     * updateDate
     *
     * @param  mixed $name
     * @param  mixed $id
     * @param  mixed $msgLabel
     * @param  mixed $value
     * @return void
     */
    public function updateDate( $name, $id, $msgLabel, $value){
        return $this->surrond('<label for"'.$id.'">'.$msgLabel.': </label> '
        .'<input type="date" name="'.$name.'" id="'.$id.'" placeholder="'.$value.'"  required>');
    }
} 
