<?php
/**
 * OOP Nonce tests
 *
 * @category WP/OOP
 * @package  WPDT\WPDTNonce
 * @author   Davide Taddei <davide.taddei@gmail.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     https://github.com/wpdt/wpdt-nonce
 */
namespace WPDT\Nonce\Tests;

use WPDT\Nonce;
use WPDT\Tests\BaseTestCase;

/**
 * Class NonceTest
 *
 * @category WP/OOP
 * @package  WPDT\WPDTNonce
 * @author   Davide Taddei <davide.taddei@gmail.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @link     https://github.com/wpdt/wpdt-nonce
 */
class NonceTest extends BaseTestCase
{
    /**
     * Setup BaseTestCase wrap method
     *
     * @return null|void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Setup BaseTestCase wrap method
     *
     * @return null|void
     */
    public function testGetString()
    {
        $action = "my_action";
        \WP_Mock::userFunction(
            'wp_create_nonce',
            [
                'action' => $action,
                'times' => 1,
                'return' => md5($action)
            ]
        );
        $nonce = new Nonce($action);
        $this->assertEquals(md5($action), $nonce->getString());
    }
}