<?
function classLoader($class_name) {
	$class_name1 = (strstr($class_name,'\\')) ? substr($class_name, strrpos($class_name, '\\') + 1) : $class_name;
	if (file_exists('../lib/'.$class_name1.'.php')) {
		require_once ('../lib/'.$class_name1.'.php');
	}
	$class_name;
	if (file_exists('../lib/'.$class_name.'.php')) {
		require_once ('../lib/'.$class_name.'.php');
	}
}
spl_autoload_register('classLoader');

?>
