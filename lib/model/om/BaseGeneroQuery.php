<?php


/**
 * Base class that represents a query for the 'genero' table.
 *
 * 
 *
 * @method     GeneroQuery orderByIdgenero($order = Criteria::ASC) Order by the idgenero column
 * @method     GeneroQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 * @method     GeneroQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     GeneroQuery groupByIdgenero() Group by the idgenero column
 * @method     GeneroQuery groupByTipo() Group by the tipo column
 * @method     GeneroQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     GeneroQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GeneroQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GeneroQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GeneroQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method     GeneroQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method     GeneroQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method     Genero findOne(PropelPDO $con = null) Return the first Genero matching the query
 * @method     Genero findOneOrCreate(PropelPDO $con = null) Return the first Genero matching the query, or a new Genero object populated from the query conditions when no match is found
 *
 * @method     Genero findOneByIdgenero(int $idgenero) Return the first Genero filtered by the idgenero column
 * @method     Genero findOneByTipo(string $tipo) Return the first Genero filtered by the tipo column
 * @method     Genero findOneByDescripcion(string $descripcion) Return the first Genero filtered by the descripcion column
 *
 * @method     array findByIdgenero(int $idgenero) Return Genero objects filtered by the idgenero column
 * @method     array findByTipo(string $tipo) Return Genero objects filtered by the tipo column
 * @method     array findByDescripcion(string $descripcion) Return Genero objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseGeneroQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseGeneroQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Genero', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GeneroQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GeneroQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GeneroQuery) {
			return $criteria;
		}
		$query = new GeneroQuery();
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
	 * @return    Genero|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = GeneroPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(GeneroPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Genero A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDGENERO`, `TIPO`, `DESCRIPCION` FROM `genero` WHERE `IDGENERO` = :p0';
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
			$obj = new Genero();
			$obj->hydrate($row);
			GeneroPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Genero|array|mixed the result, formatted by the current formatter
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
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GeneroPeer::IDGENERO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GeneroPeer::IDGENERO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idgenero column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdgenero(1234); // WHERE idgenero = 1234
	 * $query->filterByIdgenero(array(12, 34)); // WHERE idgenero IN (12, 34)
	 * $query->filterByIdgenero(array('min' => 12)); // WHERE idgenero > 12
	 * </code>
	 *
	 * @param     mixed $idgenero The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByIdgenero($idgenero = null, $comparison = null)
	{
		if (is_array($idgenero) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GeneroPeer::IDGENERO, $idgenero, $comparison);
	}

	/**
	 * Filter the query on the tipo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTipo('fooValue');   // WHERE tipo = 'fooValue'
	 * $query->filterByTipo('%fooValue%'); // WHERE tipo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tipo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByTipo($tipo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tipo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tipo)) {
				$tipo = str_replace('*', '%', $tipo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GeneroPeer::TIPO, $tipo, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
	 * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $descripcion The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByDescripcion($descripcion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descripcion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descripcion)) {
				$descripcion = str_replace('*', '%', $descripcion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GeneroPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query by a related Producto object
	 *
	 * @param     Producto $producto  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByProducto($producto, $comparison = null)
	{
		if ($producto instanceof Producto) {
			return $this
				->addUsingAlias(GeneroPeer::IDGENERO, $producto->getIdgenero(), $comparison);
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
	 * @return    GeneroQuery The current query, for fluid interface
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
	 * @param     Genero $genero Object to remove from the list of results
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function prune($genero = null)
	{
		if ($genero) {
			$this->addUsingAlias(GeneroPeer::IDGENERO, $genero->getIdgenero(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseGeneroQuery