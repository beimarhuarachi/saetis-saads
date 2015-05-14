<?php
/**
 * Saetis
 *
 * Aplicacion para ingenieria de software
 *
 * @package		saetis-saads
 * @author		Beimar Huarachi Mamani
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Clase para encriptar contrasenias
 *
 * Esta clase provee de una manera de encriptar las contrasenias con el algoritmo blowfish de PHP 5.3
 *
 * @package		saetis-saads
 * @subpackage	modelo/nucleo
 * @author		Beimar Huarachi Mamani
 */
 class Encriptador {
	/**
	 * Codogo para la encriptacion, tambien conocido como salt
	 *
	 * @var string
	 * @access private
	 */
	private $codigoEncriptacion;
 
 
	public function __construct() {
		$this->codigoEncriptacion = '$2x$07$./f4af7kJi1jdaxlswE34$';
	}
 
	/**
	 * Encriptar
	 *
	 * Encripta la contrasena con el algoritmo blowfish de PHP, llamado por la funcion cript()
	 * Utiliza la variale de codigo de encriptacion.
	 *
	 * @access	public
	 * @param	string	la contrasena a ser encriptada
	 * @return	string
	 */
	public function encriptar($contrasena) {
		if($contrasena == '') {
			
			return null;
			
		} else {
			return crypt($contrasena, '$2x$07$./f4af7kJi1jdaxlswE34$');
		}
		
	}
	
	/**
	 * Comprobar
	 *
	 * Conprueba si la contrasena introducida por el usuario concide con la contrasena en la base de datos
	 * Si estas contrasenas son iguales retorna true, caso contrario retorna false.
	 *
	 * @access	public
	 * @param	string	la contrasena ingresada por el usuario
	 * @param	string	la contrasena de la base de datos
	 * @return	boolean
	 */
	public function comprobarContrasena($contrasenaUsuario, $contrasenaBaseDatos) {
		if($contrasenaUsuario != '') {
			$contrasenaEncriptada = $this->encriptar($contrasenaUsuario);
			if($contrasenaEncriptada == $contrasenaBaseDatos) {
				return true;
			} else {
				return false;
			}
		}
		
		return false;
	}
	
	/**
	 * obtener la llave de encriptacion
	 *
	 * @access	public
	 * @return	string
	 */
	public function getCodigoEncriptacion() {
		return $this->codigoEncriptacion;
	}
	
	/**
	 * Cambiar la llave de encriptacion
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function setCodigoEncriptacion($nuevoCodigo) {
		$this->codigoEncriptacion = $nuevoCodigo;
	}
 }