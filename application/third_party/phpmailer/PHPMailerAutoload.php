<?php

/**

 * *

 *  * Created by PhpStorm.

 *  * User: boonkhailim

 *  * Year: 2017

 *  

 */



/**

 * *

 *  * Created by ${PRODUCT_NAME}.

 *  * User: ${USER}

 *  * Date: 2017

 *  

 */



/**

 * PHPMailer SPL autoloader.

 * @param string $classname The name of the class to load

 */

function PHPMailerAutoload($classname)

{

    //Can't use __DIR__ as it's only in PHP 5.3+

    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';

    if (is_readable($filename)) {

        require $filename;

    }

}



if (version_compare(PHP_VERSION, '5.1.2', '>=')) {

    //SPL autoloading was introduced in PHP 5.1.2

    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {

        spl_autoload_register('PHPMailerAutoload', true, true);

    } else {

        spl_autoload_register('PHPMailerAutoload');

    }

} else {

    /**

     * Fall back to traditional autoload for old PHP versions

     * @param string $classname The name of the class to load

     */

    function spl_autoload_register($classname)

    {

        PHPMailerAutoload($classname);

    }

    // deprecated -> amend by shuq
    // function __autoload($classname)

    // {

    //     PHPMailerAutoload($classname);

    // }

}
