<?php


/**
 * Base class that represents a query for the 'ciudad' table.
 *
 * 
 *
 * @method     CiudadQuery orderByIdciudad($order = Criteria::ASC) Order by the idciudad column
 * @method     CiudadQuery orderByIdProvincia($order = Criteria::ASC) Order by the id_provincia column
 * @method     CiudadQuery orderByNomciudad($order = Criteria::ASC) Order by the nomCiudad column
 * @method     CiudadQuery orderByCp($order = Criteria::ASC) Order by the cp column
 *
 * @method     CiudadQuery groupByIdciudad() Group by the idciudad column
 * @method     CiudadQuery groupByIdProvincia() Group by the id_provincia column
 * @method     CiudadQuery groupByNomciudad() Group by the nomCiudad column
 * @method     CiudadQuery groupByCp() Group by the cp column
 *
 * @method     CiudadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CiudadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CiudadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CiudadQuery leftJoinProvincia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Provincia relation
 * @method     CiudadQuery rightJoinProvincia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Provincia relation
 * @method     CiudadQuery innerJoinProvincia($relationAlias = null) Adds a INNER JOIN clause to the query using the Provincia relation
 *
 * @method     CiudadQuery leftJoinClienteRelatedByIdProv($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdProv relation
 * @method     CiudadQuery rightJoinClienteRelatedByIdProv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdProv relation
 * @method     CiudadQuery innerJoinClienteRelatedByIdProv($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdProv relation
 *
 * @method     CiudadQuery leftJoinClienteRelatedByIdCiudad($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdCiudad relation
 * @method     CiudadQuery rightJoinClienteRelatedByIdCiudad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdCiudad relation
 * @method     CiudadQuery innerJoinClienteRelatedByIdCiudad($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdCiudad relation
 *
 * @method     CiudadQuery leftJoinEmpleadoRelatedByIdCiudad($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdCiudad relation
 * @method     CiudadQuery rightJoinEmpleadoRelatedByIdCiudad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdCiudad relation
 * @method     CiudadQuery innerJoinEmpleadoRelatedByIdCiudad($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdCiudad relation
 *
 * @method     CiudadQuery leftJoinEmpleadoRelatedByIdProv($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdProv relation
 * @method     CiudadQuery rightJoinEmpleadoRelatedByIdProv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdProv relation
 * @method     CiudadQuery innerJoinEmpleadoRelatedByIdProv($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdProv relation
 *
 * @method     Ciudad findOne(PropelPDO $con = null) Return the first Ciudad matching the query
 * @method     Ciudad findOneOrCreate(PropelPDO $con = null) Return the first Ciudad matching the query, or a new Ciudad object populated from the query conditions when no match is found
 *
 * @method     Ciudad findOneByIdciudad(int $idciudad) Return the first Ciudad filtered by the idciudad column
 * @method     Ciudad findOneByIdProvincia(int $id_provincia) Return the first Ciudad filtered by the id_provincia column
 * @method     Ciudad findOneByNomciudad(string $nomCiudad) Return the first Ciudad filtered by the nomCiudad column
 * @method     Ciudad findOneByCp(string $cp) Return the first Ciudad filtered by the cp column
 *
 * @method     array findByIdciudad(int $idciudad) Return Ciudad objects filtered by the idciudad column
 * @method     array findByIdProvincia(int $id_provincia) Return Ciudad objects filtered by the id_provincia column
 * @method     array findByNomciudad(string $nomCiudad) Return Ciudad objects filtered by the nomCiudad column
 * @method     array findByCp(string $cp) Return Ciudad objects filtered by the cp column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCiudadQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseCiudadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Ciudad', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CiudadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CiudadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CiudadQuery) {
			return $criteria;
		}
		$query = new CiudadQuery();
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
	 * @return    Ciudad|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = CiudadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(CiudadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Ciudad A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDCIUDAD`, `ID_PROVINCIA`, `NOMCIUDAD`, `CP` FROM `ciudad` WHERE `IDCIUDAD` = :p0';
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
			$obj = new Ciudad();
			$obj->hydrate($row);
			CiudadPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Ciudad|array|mixed the result, formatted by the current formatter
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
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CiudadPeer::IDCIUDAD, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CiudadPeer::IDCIUDAD, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idciudad column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdciudad(1234); // WHERE idciudad = 1234
	 * $query->filterByIdciudad(array(12, 34)); // WHERE idciudad IN (12, 34)
	 * $query->filterByIdciudad(array('min' => 12)); // WHERE idciudad > 12
	 * </code>
	 *
	 * @param     mixed $idciudad The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByIdciudad($idciudad = null, $comparison = null)
	{
		if (is_array($idciudad) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CiudadPeer::IDCIUDAD, $idciudad, $comparison);
	}

	/**
	 * Filter the query on the id_provincia column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProvincia(1234); // WHERE id_provincia = 1234
	 * $query->filterByIdProvincia(array(12, 34)); // WHERE id_provincia IN (12, 34)
	 * $query->filterByIdProvincia(array('min' => 12)); // WHERE id_provincia > 12
	 * </code>
	 *
	 * @see       filterByProvincia()
	 *
	 * @param     mixed $idProvincia The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByIdProvincia($idProvincia = null, $comparison = null)
	{
		if (is_array($idProvincia)) {
			$useMinMax = false;
			if (isset($idProvincia['min'])) {
				$this->addUsingAlias(CiudadPeer::ID_PROVINCIA, $idProvincia['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idProvincia['max'])) {
				$this->addUsingAlias(CiudadPeer::ID_PROVINCIA, $idProvincia['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CiudadPeer::ID_PROVINCIA, $idProvincia, $comparison);
	}

	/**
	 * Filter the query on the nomCiudad column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNomciudad('fooValue');   // WHERE nomCiudad = 'fooValue'
	 * $query->filterByNomciudad('%fooValue%'); // WHERE nomCiudad LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomciudad The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByNomciudad($nomciudad = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomciudad)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomciudad)) {
				$nomciudad = str_replace('*', '%', $nomciudad);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CiudadPeer::NOMCIUDAD, $nomciudad, $comparison);
	}

	/**
	 * Filter the query on the cp column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
	 * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cp The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByCp($cp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cp)) {
				$cp = str_replace('*', '%', $cp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CiudadPeer::CP, $cp, $comparison);
	}

	/**
	 * Filter the query by a related Provincia object
	 *
	 * @param     Provincia|PropelCollection $provincia The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByProvincia($provincia, $comparison = null)
	{
		if ($provincia instanceof Provincia) {
			return $this
				->addUsingAlias(CiudadPeer::ID_PROVINCIA, $provincia->getIdprovincia(), $comparison);
		} elseif ($provincia instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(CiudadPeer::ID_PROVINCIA, $provincia->toKeyValue('PrimaryKey', 'Idprovincia'), $comparison);
		} else {
			throw new PropelException('filterByProvincia() only accepts arguments of type Provincia or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Provincia relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function joinProvincia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Provincia');

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
			$this->addJoinObject($join, 'Provincia');
		}

		return $this;
	}

	/**
	 * Use the Provincia relation Provincia object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProvinciaQuery A secondary query class using the current class as primary query
	 */
	public function useProvinciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProvincia($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Provincia', 'ProvinciaQuery');
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente $cliente  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByClienteRelatedByIdProv($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(CiudadPeer::ID_PROVINCIA, $cliente->getIdProv(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			return $this
				->useClienteRelatedByIdProvQuery()
				->filterByPrimaryKeys($cliente->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByClienteRelatedByIdProv() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ClienteRelatedByIdProv relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function joinClienteRelatedByIdProv($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ClienteRelatedByIdProv');

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
			$this->addJoinObject($join, 'ClienteRelatedByIdProv');
		}

		return $this;
	}

	/**
	 * Use the ClienteRelatedByIdProv relation Cliente object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteRelatedByIdProvQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinClienteRelatedByIdProv($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdProv', 'ClienteQuery');
	}

	/**
	 * Filter the query by a related Cliente object
	 *
	 * @param     Cliente $cliente  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByClienteRelatedByIdCiudad($cliente, $comparison = null)
	{
		if ($cliente instanceof Cliente) {
			return $this
				->addUsingAlias(CiudadPeer::IDCIUDAD, $cliente->getIdCiudad(), $comparison);
		} elseif ($cliente instanceof PropelCollection) {
			return $this
				->useClienteRelatedByIdCiudadQuery()
				->filterByPrimaryKeys($cliente->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByClienteRelatedByIdCiudad() only accepts arguments of type Cliente or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ClienteRelatedByIdCiudad relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function joinClienteRelatedByIdCiudad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ClienteRelatedByIdCiudad');

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
			$this->addJoinObject($join, 'ClienteRelatedByIdCiudad');
		}

		return $this;
	}

	/**
	 * Use the ClienteRelatedByIdCiudad relation Cliente object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ClienteQuery A secondary query class using the current class as primary query
	 */
	public function useClienteRelatedByIdCiudadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinClienteRelatedByIdCiudad($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdCiudad', 'ClienteQuery');
	}

	/**
	 * Filter the query by a related Empleado object
	 *
	 * @param     Empleado $empleado  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByEmpleadoRelatedByIdCiudad($empleado, $comparison = null)
	{
		if ($empleado instanceof Empleado) {
			return $this
				->addUsingAlias(CiudadPeer::IDCIUDAD, $empleado->getIdCiudad(), $comparison);
		} elseif ($empleado instanceof PropelCollection) {
			return $this
				->useEmpleadoRelatedByIdCiudadQuery()
				->filterByPrimaryKeys($empleado->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByEmpleadoRelatedByIdCiudad() only accepts arguments of type Empleado or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the EmpleadoRelatedByIdCiudad relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function joinEmpleadoRelatedByIdCiudad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EmpleadoRelatedByIdCiudad');

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
			$this->addJoinObject($join, 'EmpleadoRelatedByIdCiudad');
		}

		return $this;
	}

	/**
	 * Use the EmpleadoRelatedByIdCiudad relation Empleado object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmpleadoQuery A secondary query class using the current class as primary query
	 */
	public function useEmpleadoRelatedByIdCiudadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmpleadoRelatedByIdCiudad($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdCiudad', 'EmpleadoQuery');
	}

	/**
	 * Filter the query by a related Empleado object
	 *
	 * @param     Empleado $empleado  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function filterByEmpleadoRelatedByIdProv($empleado, $comparison = null)
	{
		if ($empleado instanceof Empleado) {
			return $this
				->addUsingAlias(CiudadPeer::ID_PROVINCIA, $empleado->getIdProv(), $comparison);
		} elseif ($empleado instanceof PropelCollection) {
			return $this
				->useEmpleadoRelatedByIdProvQuery()
				->filterByPrimaryKeys($empleado->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByEmpleadoRelatedByIdProv() only accepts arguments of type Empleado or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the EmpleadoRelatedByIdProv relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function joinEmpleadoRelatedByIdProv($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('EmpleadoRelatedByIdProv');

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
			$this->addJoinObject($join, 'EmpleadoRelatedByIdProv');
		}

		return $this;
	}

	/**
	 * Use the EmpleadoRelatedByIdProv relation Empleado object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EmpleadoQuery A secondary query class using the current class as primary query
	 */
	public function useEmpleadoRelatedByIdProvQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinEmpleadoRelatedByIdProv($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdProv', 'EmpleadoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Ciudad $ciudad Object to remove from the list of results
	 *
	 * @return    CiudadQuery The current query, for fluid interface
	 */
	public function prune($ciudad = null)
	{
		if ($ciudad) {
			$this->addUsingAlias(CiudadPeer::IDCIUDAD, $ciudad->getIdciudad(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseCiudadQuery