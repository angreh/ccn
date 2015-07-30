<?php

/**
 * caso o PHP não encontre a classe que foi tentada ser instanciada o AutoLoader
 * vai buscar o lugar da classe e dar o require necessário, funciona tanto para
 * os helpers como para os Mappers, Models, Controller e etc ...
 *
 * @author Angreh (angreh@gmail.com)
 * @version 2.0
 */
class AutoLoad_Helper
{
    /**
     * Instância da classe AutoLoader
     * @var AutoLoad_Helper
     */
    private static $_instance = null;

    /**
     * Retorna uma instância de AutoLoad_Helper, caso não exista é criada
     *
     * @return AutoLoad_Helper
     */
    public static function getInstance()
    {
        if (self::$_instance == null)
            self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * Informa para o PHP qual função ele deve executar caso não encontre a
     * classe desejada
     */
    public function register()
    {

        spl_autoload_register(array($this, '_autoloader'));
    }

    /**
     * Define o caminho e arquivo que deve ser usado no require para que a
     * classe seja instanciada
     *
     * @param string $name nome da classe procurada
     */
    private function _autoloader($name)
    {
        $pieces = explode('_', $name);
        $path = realpath(APP_PATH . $pieces[1] . '/' . $name . '.class.php');
        //echo $path.'<br />';
        require_once($path);
    }
}