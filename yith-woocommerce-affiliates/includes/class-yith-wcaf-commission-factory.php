<?php
/**
 * Commission Factory class
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH/Affiliates/Classes
 * @version 2.0.0
 */

if ( ! defined( 'YITH_WCAF' ) ) {
	exit;
} // Exit if accessed directly

if ( ! class_exists( 'YITH_WCAF_Commission_Factory' ) ) {
	/**
	 * Static class that offers methods to construct YITH_WCAF_Commission objects
	 *
	 * @since 2.0.0
	 */
	class YITH_WCAF_Commission_Factory extends YITH_WCAF_Abstract_Object_Factory {

		/**
		 * Type of objects the factory should build
		 *
		 * @var string
		 */
		protected static $object_type = 'commission';

		/**
		 * Returns a list of commissions matching filtering criteria
		 *
		 * @param array $args Filtering criteria (@see \YITH_WCAF_Commission_Data_Store::query).
		 *
		 * @return YITH_WCAF_Commissions_Collection|string[]|bool Result set; false on failure.
		 */
		public static function get_commissions( $args = array() ) {
			return self::get_objects( $args );
		}

		/**
		 * Returns a commission, given the id
		 *
		 * @param int $id Commission's ID.
		 *
		 * @return YITH_WCAF_Commission|bool Commission object, or false on failure
		 */
		public static function get_commission( $id ) {
			return self::get_object( $id );
		}

		/**
		 * Created a new commission object starting from a list of props
		 *
		 * @param array $args Array of params used to populate the commission object.
		 * @return YITH_WCAF_Commission|bool Commission object, or false on failure.
		 */
		public static function create_commission( $args = array() ) {
			return self::create_object( $args );
		}
	}
}
