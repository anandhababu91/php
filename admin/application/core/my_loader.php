<?
class MY_Loader extends CI_Loader
{
    public function template($page,$data=NULL)
    {
	  
       $content =$this->view("template/header",$data,TRUE);
       $content .=$this->view("template/side_bar",$data,TRUE);
	   $content .=$this->view($page,$data,TRUE);
       $content .=$this->view("template/footer",$data,TRUE);
 	   print_r($content);
    }
}
?>