<?php



/**
 * This class defines the structure of the 'ciudad' table.
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
class CiudadTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CiudadTableMap';

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
		$this->setName('ciudad');
		$this->setPhpName('Ciudad');
		$this->setClassname('Ciudad');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('IDCIUDAD', 'Idciudad', 'INTEGER', true, 10, null);
		$this->addForeignKey('ID_PROVINCIA', 'IdProvincia', 'INTEGER', 'provincia', 'IDPROVINCIA', true, 10, null);
		$this->addColumn('NOMCIUDAD', 'Nomciudad', 'VARCHAR', true, 100, null);
		$this->addColumn('CP', 'Cp', 'VARCHAR', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Provincia', 'Provincia', RelationMap::MANY_TO_ONE, array('id_provincia' => 'idprovincia', ), 'CASCADE', 'CASCADE');
		$this->addRelation('ClienteRelatedByIdProv', 'Cliente', RelationMap::ONE_TO_MANY, array('id_provincia' => 'id_prov', ), 'CASCADE', 'CASCADE', 'ClientesRelatedByIdProv');
		$this->addRelation('ClienteRelatedByIdCiudad', 'Cliente', RelationMap::ONE_TO_MANY, array('idciudad' => 'id_ciudad', ), 'CASCADE', 'CASCADE', 'ClientesRelatedByIdCiudad');
		$this->addRelation('EmpleadoRelatedByIdCiudad', 'Empleado', RelationMap::ONE_TO_MANY, array('idciudad' => 'id_ciudad', ), 'CASCADE', 'CASCADE', 'EmpleadosRelatedByIdCiudad');
		$this->addRelation('EmpleadoRelatedByIdProv', 'Empleado', RelationMap::ONE_TO_MANY, array('id_provincia' => 'id_prov', ), null, null, 'EmpleadosRelatedByIdProv');
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

} // CiudadTableMap
