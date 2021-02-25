<?php
class Formulario{ 
private $name;
private $nameForm;
private $action;
private $method;
private $enctype;
private $onsubmit;
private $form;
private $input;
private $type;
private $label;
private $value;
private $oForm;
private $cForm;
private $radio;
private $checkbox;
private $select;
private $texto;
private $fieldset;
private $legend;
private $widht;
 
 function iniciacion($name='form1', $method='post', $action='#', $enctype='', $onsubmit=''){
        $this->action = $action;
        $this->method = $method;
        $this->nameForm = $name;
        $this->enctype = $enctype;
        $this->onsubmit = $onsubmit;
        
        if($action=='#'){
            $this->action = $_SERVER['PHP_SELF'];
        }
        
        if($enctype== ''){
            $this->enctype = 'multipart/form-data';
        }
        
        
        $this->oform = "<form name='".$this->nameForm."' id='".$this->nameForm."' action='".$this->action."' method='".$this->method."' enctype='".$this->enctype."' onsubmit='".$this->onsubmit."'>";
        return $this->oform;
    }
    
    function addInput($type, $name, $label='',$value=''){
        $this->type = $type;
        $this->name = $name;
        $this->label= $label;
        $this->value = $value;
        $this->input = "<div class='elemFormulario'>";
        if($this->type == "submit" || $this->type=="reset"){
            $this->input .= "<label></label>";
        }
        else{
            $this->input.= "<label>".$this->label."</label><br>\n";
        }
        
        $this->input .= "<input type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."'/></div>\n";
        
        return $this->input;
    }
    
      function addFile($name, $label=''){
        
        $this->name = $name;
        $this->label= $label;
      
        $this->input = "<div class='elemFormulario'>";
        $this->input.= "<label>".$this->label."</label><br>\n";
        $this->input .= "<input type='file' name='".$this->name."' id='".$this->name."'/></div>\n";
        
        return $this->input;
    }
 function addIdentificador($name, $value=''){
        $this->type = 'hidden';
        $this->name = $name;
        $this->value = $value;


     //$res .= "<input type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."'/>";
     $res = "<input type='".$this->type."' name='".$this->name."' value='".$this->value."' id='".$this->name."'/>";
        
        return $res;
    }
    
    function addcheckradio($type,$name,$values,$selected=0){
    
        unset($this->radio);
        
        $this->value = $values;
        $this->selected = $selected;
        $this->type = $type;
        
        if ($this->type=="checkbox"){
            $this->name = $name."[]";
        }
        else{
            $this->name = $name;
        }
        
        $c=1;   
        $this->radio = "<div class='elemFormulario'>";
        while(list($val,$l)=each($this->value)){    
            if ($c==$this->selected){
                $this->check = " checked/>";
            }
            else{
                $this->check = " />";
            }
            
            $this->radio .=  "<label>".$this->value[$val]."</label><input type='".$this->type."' name='".$this->name."' value='".$val."'".$this->check."<br>\n";
            $c++;
        }
        $this->radio .= "</div>";
        return  $this->radio;
    }
    
    function addTextarea($name, $cols=20, $rows=5, $label='',$value=''){
        $this->name=$name;
        $this->row= $rows;
        $this->col= $cols;
        $this->value = $value;
        $this->label = $label;
        
        $this->textarea = "<div class='elemFormulario'><label>".$this->label."</label><br><textarea name='".$this->name."' cols='".$this->col."' rows='".$this->row."'>".$this->value."</textarea></div>\n";
        return $this->textarea;
    }
    
    function inicializaNicEddit(){
        
        $txt= "<script src='scripts/nicEdit/nicEdit.js' type='text/javascript'></script>
<script type='text/javascript'>
bkLib.onDomLoaded(function() {
	new nicEditor().panelInstance('area1');
	new nicEditor({fullPanel : true}).panelInstance('area2');
	new nicEditor({iconsPath : 'scripts/nicEdit/nicEditorIcons.gif'}).panelInstance('area3');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	new nicEditor({maxHeight : 100}).panelInstance('area5');
});
</script>";
        

        return $txt;
    }
    
    function inicializaCKEditor(){
        
        $txt= '<script src="scripts/ckeditor/ckeditor.js"></script>';
        

        return $txt;
    }
    
       function addTextareaNicEdit($name, $cols=20, $rows=5, $label='',$value='', $area='area1'){
        $this->name=$name;
        $this->row= $rows;
        $this->col= $cols;
        $this->value = $value;
        $this->label = $label;
        $this->area = $area;
        
        $this->textarea = "<div class='elemFormulario'><label>".$this->label."</label><br><textarea name='".$this->name."' cols='".$this->col."' rows='".$this->row."' id='".$this->area."'>".$this->value."</textarea></div>\n";
        return $this->textarea;
    }
 
  
    
        function addCkeditor($name, $id, $cols=20, $rows=5, $label='',$value=''){
        $this->name=$name;
        $this->row= $rows;
        $this->col= $cols;
        $this->value = $value;
        $this->label = $label;
        $this->id = $id;
        
        $this->textarea = "<div class='elemFormulario'><label>".$this->label."</label><br><textarea name='".$this->name."' cols='".$this->col."' rows='".$this->row."' id='".$this->id."'>".$this->value."</textarea></div>\n";
        $this->textarea .= "<script>CKEDITOR.replace( '".$this->id."' );CKFinder.setupCKEditor( editor, '/ckfinder/' );</script>";
        
        return $this->textarea;
    }
    function addSelect($name, $values, $label='',$options='', $multiple=0){
        
        if($options==''){
            $options = $values;
        }
        $this->values=$values;
        $this->options=$options;
        $this->name=$name;
        $this->label=$label;
        $this->select = "<div class='elemFormulario'>"; 
        if($multiple==1){
            $this->select .= "<label>".$this->label."</label><br><select name='".$this->name."[]' multiple='multiple'>";
        }
        else{
            $this->select .= "<label>".$this->label."</label><br><select name='".$this->name."'>";
        }
        
       for($i=0;$i<sizeof($this->value);$i++){
           
            $this->select .= "<option value='".$this->value[$i]."'>".$this->options[$i]."</option>";
       }
        {       
           
        }
            $this->select  .= "</select></div>\n";
 
        return $this->select;
    }
    
    
    
    function openfieldset($texto,$width='300'){
        $this->legend=$texto;
        $this->width=$width;
        
        $this->fieldset="<fieldset style='width:".$this->width."px;'><legend>".$this->legend."</legend>\n";
        return $this->fieldset;
    }
    
     
    
    function closefieldset(){
        
        $this->fieldset="</fieldset>";
        return $this->fieldset;
    }
    
    function addEnviar(){
        
        return '<div class="boton"><a class="btn btn-lg btn-success" href="#" onclick="enviar(\''.$this->nameForm.'\',0)">
  <i class="fa fa-archive"></i> Enviar<br>datos</a></div>';
    }
    function addGuardar(){

        return '<div class="boton"><a class="btn btn-lg btn-success" href="#" onclick="guardar(\''.$this->nameForm.'\',1)">
  <i class="fa fa-cloud-upload fa-2x pull-left"></i> Guardar datos</a></div>';
    }
    
    function closeform(){
        $this->cform = "</form>";
        return $this->cform;
    }
}