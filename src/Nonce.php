<?php
namespace WPDT;

/**
 * Class Nonce
 *
 * @category WP/OOP
 * @package  WPDT\WPDTNonce
 * @author   Davide Taddei <davide.taddei@gmail.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     https://github.com/wpdt/wpdt-nonce
 */
class Nonce
{
    private $_key;

    /**
     * Nonce constructor.
     *
     * @param string $key wp nonce key
     */
    public function __construct($key="")
    {
        $this->_key = $key;
    }

    /**
     * Return nonce string
     *
     * @return string
     */
    public function getString()
    {
        return wp_create_nonce($this->_key);
    }


}