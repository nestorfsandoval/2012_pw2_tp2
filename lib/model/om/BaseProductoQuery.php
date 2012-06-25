<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 * 
 *
 * @method     ProductoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method     ProductoQuery orderByTitulo($order = Criteria::ASC) Order by the titulo column
 * @method     ProductoQuery orderByIdartista($order = Criteria::ASC) Order by the idartista column
 * @method     ProductoQuery orderByIdgenero($order = Criteria::ASC) Order by the idgenero column
 * @method     ProductoQuery orderByAnio($order = Criteria::ASC) Order by the anio column
 * @method     ProductoQuery orderByCantidadventas($order = Criteria::ASC) Order by the cantidadVentas column
 * @method     ProductoQuery orderByStock($order = Criteria::ASC) Order by the stock column
 * @method     ProductoQuery orderByPrecio($order = Criteria::ASC) Order by the precio column
 *
 * @method     ProductoQuery groupByIdproducto() Group by the idproducto column
 * @method     ProductoQuery groupByTitulo() Group by the titulo column
 * @method     ProductoQuery groupByIdartista() Group by the idartista column
 * @method     ProductoQuery groupByIdgenero() Group by the idgenero column
 * @method     ProductoQuery groupByAnio() Group by the anio column
 * @method     ProductoQuery groupByCantidadventas() Group by the cantidadVentas column
 * @method     ProductoQuery groupByStock() Group by the stock column
 * @method     ProductoQuery groupByPrecio() Group by the precio column
 *
 * @method     ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProductoQuery leftJoinArtista($relationAlias = null) Adds a LEFT JOIN clause to the query using the Artista relation
 * @method     ProductoQuery rightJoinArtista($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Artista relation
 * @method     ProductoQuery innerJoinArtista($relationAlias = null) Adds a INNER JOIN clause to the query using the Artista relation
 *
 * @method     ProductoQuery leftJoinGenero($relationAlias = null) Adds a LEFT JOIN clause to the query using the Genero relation
 * @method     ProductoQuery rightJoinGenero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Genero relation
 * @method     ProductoQuery innerJoinGenero($relationAlias = null) Adds a INNER JOIN clause to the query using the Genero relation
 *
 * @method     ProductoQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method     ProductoQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method     ProductoQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method     Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method     Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method     Producto findOneByIdproducto(int $idproducto) Return the first Producto filtered by the idproducto column
 * @method     Producto findOneByTitulo(string $titulo) Return the first Producto filtered by the titulo column
 * @method     Producto findOneByIdartista(int $idartista) Return the first Producto filtered by the idartista column
 * @method     Producto findOneByIdgenero(int $idgenero) Return the first Producto filtered by the idgenero column
 * @method     Producto findOneByAnio(int $anio) Return the first Producto filtered by the anio column
 * @method     Producto findOneByCantidadventas(int $cantidadVentas) Return the first Producto filtered by the cantidadVentas column
 * @method     Producto findOneByStock(int $stock) Return the first Producto filtered by the stock column
 * @method     Producto findOneByPrecio(string $precio) Return the first Producto filtered by the precio column
 *
 * @method     array findByIdproducto(int $idproducto) Return Producto objects filtered by the idproducto column
 * @method     array findByTitulo(string $titulo) Return Producto objects filtered by the titulo column
 * @method     array findByIdartista(int $idartista) Return Producto objects filtered by the idartista column
 * @method     array findByIdgenero(int $idgenero) Return Producto objects filtered by the idgenero column
 * @method     array findByAnio(int $anio) Return Producto objects filtered by the anio column
 * @method     array findByCantidadventas(int $cantidadVentas) Return Producto objects filtered by the cantidadVentas column
 * @method     array findByStock(int $stock) Return Producto objects filtered by the stock column
 * @method     array findByPrecio(string $precio) Return Producto objects filtered by the precio column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseProductoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Producto', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProductoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProductoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProductoQuery) {
			return $criteria;
		}
		$query = new ProductoQuery();
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
	 * @return    Producto|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Producto A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `IDPRODUCTO`, `TITULO`, `IDARTISTA`, `IDGENERO`, `ANIO`, `CANTIDADVENTAS`, `STOCK`, `PRECIO` FROM `producto` WHERE `IDPRODUCTO` = :p0';
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
			$obj = new Producto();
			$obj->hydrate($row);
			ProductoPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Producto|array|mixed the result, formatted by the current formatter
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
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the idproducto column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
	 * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
	 * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto > 12
	 * </code>
	 *
	 * @param     mixed $idproducto The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByIdproducto($idproducto = null, $comparison = null)
	{
		if (is_array($idproducto) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto, $comparison);
	}

	/**
	 * Filter the query on the titulo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitulo('fooValue');   // WHERE titulo = 'fooValue'
	 * $query->filterByTitulo('%fooValue%'); // WHERE titulo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $titulo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByTitulo($titulo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($titulo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $titulo)) {
				$titulo = str_replace('*', '%', $titulo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProductoPeer::TITULO, $titulo, $comparison);
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
	 * @see       filterByArtista()
	 *
	 * @param     mixed $idartista The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByIdartista($idartista = null, $comparison = null)
	{
		if (is_array($idartista)) {
			$useMinMax = false;
			if (isset($idartista['min'])) {
				$this->addUsingAlias(ProductoPeer::IDARTISTA, $idartista['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idartista['max'])) {
				$this->addUsingAlias(ProductoPeer::IDARTISTA, $idartista['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::IDARTISTA, $idartista, $comparison);
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
	 * @see       filterByGenero()
	 *
	 * @param     mixed $idgenero The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByIdgenero($idgenero = null, $comparison = null)
	{
		if (is_array($idgenero)) {
			$useMinMax = false;
			if (isset($idgenero['min'])) {
				$this->addUsingAlias(ProductoPeer::IDGENERO, $idgenero['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idgenero['max'])) {
				$this->addUsingAlias(ProductoPeer::IDGENERO, $idgenero['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::IDGENERO, $idgenero, $comparison);
	}

	/**
	 * Filter the query on the anio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAnio(1234); // WHERE anio = 1234
	 * $query->filterByAnio(array(12, 34)); // WHERE anio IN (12, 34)
	 * $query->filterByAnio(array('min' => 12)); // WHERE anio > 12
	 * </code>
	 *
	 * @param     mixed $anio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByAnio($anio = null, $comparison = null)
	{
		if (is_array($anio)) {
			$useMinMax = false;
			if (isset($anio['min'])) {
				$this->addUsingAlias(ProductoPeer::ANIO, $anio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($anio['max'])) {
				$this->addUsingAlias(ProductoPeer::ANIO, $anio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::ANIO, $anio, $comparison);
	}

	/**
	 * Filter the query on the cantidadVentas column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCantidadventas(1234); // WHERE cantidadVentas = 1234
	 * $query->filterByCantidadventas(array(12, 34)); // WHERE cantidadVentas IN (12, 34)
	 * $query->filterByCantidadventas(array('min' => 12)); // WHERE cantidadVentas > 12
	 * </code>
	 *
	 * @param     mixed $cantidadventas The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByCantidadventas($cantidadventas = null, $comparison = null)
	{
		if (is_array($cantidadventas)) {
			$useMinMax = false;
			if (isset($cantidadventas['min'])) {
				$this->addUsingAlias(ProductoPeer::CANTIDADVENTAS, $cantidadventas['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cantidadventas['max'])) {
				$this->addUsingAlias(ProductoPeer::CANTIDADVENTAS, $cantidadventas['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::CANTIDADVENTAS, $cantidadventas, $comparison);
	}

	/**
	 * Filter the query on the stock column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStock(1234); // WHERE stock = 1234
	 * $query->filterByStock(array(12, 34)); // WHERE stock IN (12, 34)
	 * $query->filterByStock(array('min' => 12)); // WHERE stock > 12
	 * </code>
	 *
	 * @param     mixed $stock The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByStock($stock = null, $comparison = null)
	{
		if (is_array($stock)) {
			$useMinMax = false;
			if (isset($stock['min'])) {
				$this->addUsingAlias(ProductoPeer::STOCK, $stock['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stock['max'])) {
				$this->addUsingAlias(ProductoPeer::STOCK, $stock['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::STOCK, $stock, $comparison);
	}

	/**
	 * Filter the query on the precio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrecio(1234); // WHERE precio = 1234
	 * $query->filterByPrecio(array(12, 34)); // WHERE precio IN (12, 34)
	 * $query->filterByPrecio(array('min' => 12)); // WHERE precio > 12
	 * </code>
	 *
	 * @param     mixed $precio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByPrecio($precio = null, $comparison = null)
	{
		if (is_array($precio)) {
			$useMinMax = false;
			if (isset($precio['min'])) {
				$this->addUsingAlias(ProductoPeer::PRECIO, $precio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($precio['max'])) {
				$this->addUsingAlias(ProductoPeer::PRECIO, $precio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProductoPeer::PRECIO, $precio, $comparison);
	}

	/**
	 * Filter the query by a related Artista object
	 *
	 * @param     Artista|PropelCollection $artista The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByArtista($artista, $comparison = null)
	{
		if ($artista instanceof Artista) {
			return $this
				->addUsingAlias(ProductoPeer::IDARTISTA, $artista->getIdartista(), $comparison);
		} elseif ($artista instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ProductoPeer::IDARTISTA, $artista->toKeyValue('PrimaryKey', 'Idartista'), $comparison);
		} else {
			throw new PropelException('filterByArtista() only accepts arguments of type Artista or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Artista relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function joinArtista($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Artista');

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
			$this->addJoinObject($join, 'Artista');
		}

		return $this;
	}

	/**
	 * Use the Artista relation Artista object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ArtistaQuery A secondary query class using the current class as primary query
	 */
	public function useArtistaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinArtista($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Artista', 'ArtistaQuery');
	}

	/**
	 * Filter the query by a related Genero object
	 *
	 * @param     Genero|PropelCollection $genero The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByGenero($genero, $comparison = null)
	{
		if ($genero instanceof Genero) {
			return $this
				->addUsingAlias(ProductoPeer::IDGENERO, $genero->getIdgenero(), $comparison);
		} elseif ($genero instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ProductoPeer::IDGENERO, $genero->toKeyValue('PrimaryKey', 'Idgenero'), $comparison);
		} else {
			throw new PropelException('filterByGenero() only accepts arguments of type Genero or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Genero relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function joinGenero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Genero');

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
			$this->addJoinObject($join, 'Genero');
		}

		return $this;
	}

	/**
	 * Use the Genero relation Genero object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneroQuery A secondary query class using the current class as primary query
	 */
	public function useGeneroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGenero($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Genero', 'GeneroQuery');
	}

	/**
	 * Filter the query by a related Venta object
	 *
	 * @param     Venta $venta  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function filterByVenta($venta, $comparison = null)
	{
		if ($venta instanceof Venta) {
			return $this
				->addUsingAlias(ProductoPeer::IDPRODUCTO, $venta->getIdproducto(), $comparison);
		} elseif ($venta instanceof PropelCollection) {
			return $this
				->useVentaQuery()
				->filterByPrimaryKeys($venta->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Venta relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Venta');

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
			$this->addJoinObject($join, 'Venta');
		}

		return $this;
	}

	/**
	 * Use the Venta relation Venta object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery A secondary query class using the current class as primary query
	 */
	public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVenta($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Producto $producto Object to remove from the list of results
	 *
	 * @return    ProductoQuery The current query, for fluid interface
	 */
	public function prune($producto = null)
	{
		if ($producto) {
			$this->addUsingAlias(ProductoPeer::IDPRODUCTO, $producto->getIdproducto(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseProductoQuery