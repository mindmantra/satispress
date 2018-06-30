<?php
/**
 * Authentication server interface.
 *
 * @package SatisPress
 * @license GPL-2.0-or-later
 * @since 0.3.0
 */

declare ( strict_types = 1 );

namespace SatisPress\Authentication;

use WP_Error;

/**
 * Authentcation server interface.
 *
 * @since 0.3.0
 */
interface Server {
	/**
	 * Handle authentication.
	 *
	 * @since 0.3.0
	 *
	 * @param integer|bool $user_id Current user ID or false if unknown.
	 * @return integer|bool A user on success, or false on failure.
	 */
	public function authenticate( $user_id );

	/**
	 * Report authentication errors.
	 *
	 * @since 0.3.0
	 *
	 * @param WP_Error|mixed $value Error from another authentication handler, null if we should handle it, or another value if not.
	 * @return WP_Error|boolean|null
	 */
	public function get_authentication_errors( $value );
}