<?php



/**
 * This class defines the structure of the 'empleado' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class EmpleadoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.EmpleadoTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('empleado');
		$this->setPhpName('Empleado');
		$this->setClassname('Empleado');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_EMP', 'IdEmp', 'INTEGER', true, 10, null);
		$this->addColumn('APELLIDO', 'Apellido', 'VARCHAR', true, 100, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 100, null);
		$this->addColumn('USER', 'User', 'VARCHAR', true, 100, null);
		$this->addColumn('PASS', 'Pass', 'VARCHAR', true, 100, null);
		$this->addColumn('MAIL', 'Mail', 'VARCHAR', true, 100, null);
		$this->addForeignKey('ID_CIUDAD', 'IdCiudad', 'INTEGER', 'ciudad', 'IDCIUDAD', true, 10, null);
		$this->addForeignKey('ID_PROV', 'IdProv', 'INTEGER', 'ciudad', 'ID_PROVINCIA', true, 10, null);
		$this->addForeignKey('IDPRIVILEGIO', 'Idprivilegio', 'INTEGER', 'privilegios', 'IDPRIVILEGIOS', true, 10, null);
		$this->addColumn('HABILITADO', 'Habilitado', 'INTEGER', true, 10, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('CiudadRelatedByIdCiudad', 'Ciudad', RelationMap::MANY_TO_ONE, array('id_ciudad' => 'idciudad', ), 'CASCADE', 'CASCADE');
		$this->addRelation('CiudadRelatedByIdProv', 'Ciudad', RelationMap::MANY_TO_ONE, array('id_prov' => 'id_provincia', ), null, null);
		$this->addRelation('Privilegios', 'Privilegios', RelationMap::MANY_TO_ONE, array('idprivilegio' => 'idprivilegios', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // EmpleadoTableMap
