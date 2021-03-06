<?php



/**
 * This class defines the structure of the 'producto' table.
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
class ProductoTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ProductoTableMap';

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
		$this->setName('producto');
		$this->setPhpName('Producto');
		$this->setClassname('Producto');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('IDPRODUCTO', 'Idproducto', 'INTEGER', true, 10, null);
		$this->addColumn('TITULO', 'Titulo', 'VARCHAR', true, 100, null);
		$this->addForeignKey('IDARTISTA', 'Idartista', 'INTEGER', 'artista', 'IDARTISTA', true, 10, null);
		$this->addForeignKey('IDGENERO', 'Idgenero', 'INTEGER', 'genero', 'IDGENERO', true, 10, null);
		$this->addColumn('ANIO', 'Anio', 'INTEGER', true, 10, null);
		$this->addColumn('CANTIDADVENTAS', 'Cantidadventas', 'INTEGER', true, null, 0);
		$this->addColumn('STOCK', 'Stock', 'INTEGER', true, null, 1);
		$this->addColumn('PRECIO', 'Precio', 'DECIMAL', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('Artista', 'Artista', RelationMap::MANY_TO_ONE, array('idartista' => 'idartista', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Genero', 'Genero', RelationMap::MANY_TO_ONE, array('idgenero' => 'idgenero', ), 'CASCADE', 'CASCADE');
		$this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Ventas');
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

} // ProductoTableMap
