<?php


/**
 * Base class that represents a query for the 'artista' table.
 *
 * 
 *
 * @method     ArtistaQuery orderByIdartista($order = Criteria::ASC) Order by the idartista column
 * @method     ArtistaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 *
 * @method     ArtistaQuery groupByIdartista() Group by the idartista column
 * @method     ArtistaQuery groupByNombre() Group by the nombre column
 *
 * @method     ArtistaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ArtistaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ArtistaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ArtistaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method     ArtistaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method     ArtistaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method     Artista findOne(PropelPDO $con = null) Return the first Artista matching the query
 * @method     Artista findOneOrCreate(PropelPDO $con = null) Return the first Artista matching the query, or a new Artista object populated from the query conditions when no match is found
 *
 * @method     Artista findOneByIdartista(int $idartista) Return the first Artista filtered by the idartista column
 * @method     Artista findOneByNombre(string $nombre) Return the first Artista filtered by the nombre column
 *
 * @method     array findByIdartista(int $idartista) Return Artista objects filtered by the idartista column
 * @method     array findByNombre(string $nombre) Return Artista objects filtered by the nombre column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseArtistaQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseArtistaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Artista', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ArtistaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ArtistaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ArtistaQuery) {
			return $criteria;
		}
		$query = new ArtistaQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Artista|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ArtistaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ArtistaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Artista A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDARTISTA`, `NOMBRE` FROM `artista` WHERE `IDARTISTA` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Artista();
			$obj->hydrate($row);
			ArtistaPeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Artista|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ArtistaPeer::IDARTISTA, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ArtistaPeer::IDARTISTA, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idartista column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdartista(1234); // WHERE idartista = 1234
	 * $query->filterByIdartista(array(12, 34)); // WHERE idartista IN (12, 34)
	 * $query->filterByIdartista(array('min' => 12)); // WHERE idartista > 12
	 * </code>
	 *
	 * @param     mixed $idartista The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function filterByIdartista($idartista = null, $comparison = null)
	{
		if (is_array($idartista) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ArtistaPeer::IDARTISTA, $idartista, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
	 * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nombre The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ArtistaPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query by a related Producto object
	 *
	 * @param     Producto $producto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function filterByProducto($producto, $comparison = null)
	{
		if ($producto instanceof Producto) {
			return $this
				->addUsingAlias(ArtistaPeer::IDARTISTA, $producto->getIdartista(), $comparison);
		} elseif ($producto instanceof PropelCollection) {
			return $this
				->useProductoQuery()
				->filterByPrimaryKeys($producto->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Producto relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Producto');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Producto');
		}

		return $this;
	}

	/**
	 * Use the Producto relation Producto object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery A secondary query class using the current class as primary query
	 */
	public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProducto($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Artista $artista Object to remove from the list of results
	 *
	 * @return    ArtistaQuery The current query, for fluid interface
	 */
	public function prune($artista = null)
	{
		if ($artista) {
			$this->addUsingAlias(ArtistaPeer::IDARTISTA, $artista->getIdartista(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseArtistaQuery