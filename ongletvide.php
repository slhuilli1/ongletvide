 <?php
	defined('_JEXEC') or die('Access deny');
	
	class plgContentOngletvide extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){	
			$re = '/(<ul.*class="nav nav-tabs".*<li.*<a.*><span.*>)(.*)(<\/span>.*<\/li>.*[[[onglet_vide]]])/Us';
			
			$subst = "$1&#".$this->params->get('code')."; $2$3";
			$article->text = preg_replace($re, $subst, $article->text, 1);		
		}	
	}
?>