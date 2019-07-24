<?php
/**
 * Class for resolving a custom GraphQL type
 *
 * @package    SB2Media\Starter\Example
 * @since      1.0.0
 * @author     sbarry
 * @link       http://example.com
 * @license    MIT
 */

namespace SB2Media\Starter\Example;

use SB2Media\Headless\Contracts\GraphQLResolverContract;

class ExampleGraphQL implements GraphQLResolverContract
{
    /**
     * Resolve the custom GraphQL type
     *
     * @since 1.0.0
     * @param array $config    The GraphQL configuration
     * @param mixed $value     The value of the setting/meta-field in the WP database
     * @param int   $post_id   The WP post unique identifier
     * @return array
     */
    public function resolve(array $config, $value, int $post_id = null)
    {
        // resolve the GraphQL Type
    }
}
