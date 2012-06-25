<?php


/**
 * Base class that represents a row from the 'cliente' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCliente extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ClientePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ClientePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id_clie field.
	 * @var        int
	 */
	protected $id_clie;

	/**
	 * The value for the apellido field.
	 * @var        string
	 */
	protected $apellido;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the telefono field.
	 * @var        string
	 */
	protected $telefono;

	/**
	 * The value for the direccion field.
	 * @var        string
	 */
	protected $direccion;

	/**
	 * The value for the id_prov field.
	 * @var        int
	 */
	protected $id_prov;

	/**
	 * The value for the id_ciudad field.
	 * @var        int
	 */
	protected $id_ciudad;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * @var        Ciudad
	 */
	protected $aCiudadRelatedByIdProv;

	/**
	 * @var        Ciudad
	 */
	protected $aCiudadRelatedByIdCiudad;

	/**
	 * @var        array Venta[] Collection to store aggregation of Venta objects.
	 */
	protected $collVentas;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $ventasScheduledForDeletion = null;

	/**
	 * Get the [id_clie] column value.
	 * 
	 * @return     int
	 */
	public function getIdClie()
	{
		return $this->id_clie;
	}

	/**
	 * Get the [apellido] column value.
	 * 
	 * @return     string
	 */
	public function getApellido()
	{
		return $this->apellido;
	}

	/**
	 * Get the [nombre] column value.
	 * 
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [telefono] column value.
	 * 
	 * @return     string
	 */
	public function getTelefono()
	{
		return $this->telefono;
	}

	/**
	 * Get the [direccion] column value.
	 * 
	 * @return     string
	 */
	public function getDireccion()
	{
		return $this->direccion;
	}

	/**
	 * Get the [id_prov] column value.
	 * 
	 * @return     int
	 */
	public function getIdProv()
	{
		return $this->id_prov;
	}

	/**
	 * Get the [id_ciudad] column value.
	 * 
	 * @return     int
	 */
	public function getIdCiudad()
	{
		return $this->id_ciudad;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of [id_clie] column.
	 * 
	 * @param      int $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setIdClie($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_clie !== $v) {
			$this->id_clie = $v;
			$this->modifiedColumns[] = ClientePeer::ID_CLIE;
		}

		return $this;
	} // setIdClie()

	/**
	 * Set the value of [apellido] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setApellido($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->apellido !== $v) {
			$this->apellido = $v;
			$this->modifiedColumns[] = ClientePeer::APELLIDO;
		}

		return $this;
	} // setApellido()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = ClientePeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [telefono] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setTelefono($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telefono !== $v) {
			$this->telefono = $v;
			$this->modifiedColumns[] = ClientePeer::TELEFONO;
		}

		return $this;
	} // setTelefono()

	/**
	 * Set the value of [direccion] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setDireccion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->direccion !== $v) {
			$this->direccion = $v;
			$this->modifiedColumns[] = ClientePeer::DIRECCION;
		}

		return $this;
	} // setDireccion()

	/**
	 * Set the value of [id_prov] column.
	 * 
	 * @param      int $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setIdProv($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_prov !== $v) {
			$this->id_prov = $v;
			$this->modifiedColumns[] = ClientePeer::ID_PROV;
		}

		if ($this->aCiudadRelatedByIdProv !== null && $this->aCiudadRelatedByIdProv->getIdProvincia() !== $v) {
			$this->aCiudadRelatedByIdProv = null;
		}

		return $this;
	} // setIdProv()

	/**
	 * Set the value of [id_ciudad] column.
	 * 
	 * @param      int $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setIdCiudad($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_ciudad !== $v) {
			$this->id_ciudad = $v;
			$this->modifiedColumns[] = ClientePeer::ID_CIUDAD;
		}

		if ($this->aCiudadRelatedByIdCiudad !== null && $this->aCiudadRelatedByIdCiudad->getIdciudad() !== $v) {
			$this->aCiudadRelatedByIdCiudad = null;
		}

		return $this;
	} // setIdCiudad()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = ClientePeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_clie = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->apellido = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->telefono = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->direccion = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->id_prov = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->id_ciudad = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = ClientePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Cliente object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aCiudadRelatedByIdProv !== null && $this->id_prov !== $this->aCiudadRelatedByIdProv->getIdProvincia()) {
			$this->aCiudadRelatedByIdProv = null;
		}
		if ($this->aCiudadRelatedByIdCiudad !== null && $this->id_ciudad !== $this->aCiudadRelatedByIdCiudad->getIdciudad()) {
			$this->aCiudadRelatedByIdCiudad = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ClientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCiudadRelatedByIdProv = null;
			$this->aCiudadRelatedByIdCiudad = null;
			$this->collVentas = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ClienteQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCliente:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCliente:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseCliente:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseCliente:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				ClientePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCiudadRelatedByIdProv !== null) {
				if ($this->aCiudadRelatedByIdProv->isModified() || $this->aCiudadRelatedByIdProv->isNew()) {
					$affectedRows += $this->aCiudadRelatedByIdProv->save($con);
				}
				$this->setCiudadRelatedByIdProv($this->aCiudadRelatedByIdProv);
			}

			if ($this->aCiudadRelatedByIdCiudad !== null) {
				if ($this->aCiudadRelatedByIdCiudad->isModified() || $this->aCiudadRelatedByIdCiudad->isNew()) {
					$affectedRows += $this->aCiudadRelatedByIdCiudad->save($con);
				}
				$this->setCiudadRelatedByIdCiudad($this->aCiudadRelatedByIdCiudad);
			}

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			if ($this->ventasScheduledForDeletion !== null) {
				if (!$this->ventasScheduledForDeletion->isEmpty()) {
					VentaQuery::create()
						->filterByPrimaryKeys($this->ventasScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->ventasScheduledForDeletion = null;
				}
			}

			if ($this->collVentas !== null) {
				foreach ($this->collVentas as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = ClientePeer::ID_CLIE;
		if (null !== $this->id_clie) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientePeer::ID_CLIE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(ClientePeer::ID_CLIE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CLIE`';
		}
		if ($this->isColumnModified(ClientePeer::APELLIDO)) {
			$modifiedColumns[':p' . $index++]  = '`APELLIDO`';
		}
		if ($this->isColumnModified(ClientePeer::NOMBRE)) {
			$modifiedColumns[':p' . $index++]  = '`NOMBRE`';
		}
		if ($this->isColumnModified(ClientePeer::TELEFONO)) {
			$modifiedColumns[':p' . $index++]  = '`TELEFONO`';
		}
		if ($this->isColumnModified(ClientePeer::DIRECCION)) {
			$modifiedColumns[':p' . $index++]  = '`DIRECCION`';
		}
		if ($this->isColumnModified(ClientePeer::ID_PROV)) {
			$modifiedColumns[':p' . $index++]  = '`ID_PROV`';
		}
		if ($this->isColumnModified(ClientePeer::ID_CIUDAD)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CIUDAD`';
		}
		if ($this->isColumnModified(ClientePeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}

		$sql = sprintf(
			'INSERT INTO `cliente` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CLIE`':
						$stmt->bindValue($identifier, $this->id_clie, PDO::PARAM_INT);
						break;
					case '`APELLIDO`':
						$stmt->bindValue($identifier, $this->apellido, PDO::PARAM_STR);
						break;
					case '`NOMBRE`':
						$stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
						break;
					case '`TELEFONO`':
						$stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
						break;
					case '`DIRECCION`':
						$stmt->bindValue($identifier, $this->direccion, PDO::PARAM_STR);
						break;
					case '`ID_PROV`':
						$stmt->bindValue($identifier, $this->id_prov, PDO::PARAM_INT);
						break;
					case '`ID_CIUDAD`':
						$stmt->bindValue($identifier, $this->id_ciudad, PDO::PARAM_INT);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setIdClie($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCiudadRelatedByIdProv !== null) {
				if (!$this->aCiudadRelatedByIdProv->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCiudadRelatedByIdProv->getValidationFailures());
				}
			}

			if ($this->aCiudadRelatedByIdCiudad !== null) {
				if (!$this->aCiudadRelatedByIdCiudad->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCiudadRelatedByIdCiudad->getValidationFailures());
				}
			}


			if (($retval = ClientePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collVentas !== null) {
					foreach ($this->collVentas as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdClie();
				break;
			case 1:
				return $this->getApellido();
				break;
			case 2:
				return $this->getNombre();
				break;
			case 3:
				return $this->getTelefono();
				break;
			case 4:
				return $this->getDireccion();
				break;
			case 5:
				return $this->getIdProv();
				break;
			case 6:
				return $this->getIdCiudad();
				break;
			case 7:
				return $this->getEmail();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()] = true;
		$keys = ClientePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdClie(),
			$keys[1] => $this->getApellido(),
			$keys[2] => $this->getNombre(),
			$keys[3] => $this->getTelefono(),
			$keys[4] => $this->getDireccion(),
			$keys[5] => $this->getIdProv(),
			$keys[6] => $this->getIdCiudad(),
			$keys[7] => $this->getEmail(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCiudadRelatedByIdProv) {
				$result['CiudadRelatedByIdProv'] = $this->aCiudadRelatedByIdProv->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aCiudadRelatedByIdCiudad) {
				$result['CiudadRelatedByIdCiudad'] = $this->aCiudadRelatedByIdCiudad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collVentas) {
				$result['Ventas'] = $this->collVentas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdClie($value);
				break;
			case 1:
				$this->setApellido($value);
				break;
			case 2:
				$this->setNombre($value);
				break;
			case 3:
				$this->setTelefono($value);
				break;
			case 4:
				$this->setDireccion($value);
				break;
			case 5:
				$this->setIdProv($value);
				break;
			case 6:
				$this->setIdCiudad($value);
				break;
			case 7:
				$this->setEmail($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ClientePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdClie($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setApellido($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombre($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTelefono($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDireccion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdProv($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIdCiudad($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setEmail($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);

		if ($this->isColumnModified(ClientePeer::ID_CLIE)) $criteria->add(ClientePeer::ID_CLIE, $this->id_clie);
		if ($this->isColumnModified(ClientePeer::APELLIDO)) $criteria->add(ClientePeer::APELLIDO, $this->apellido);
		if ($this->isColumnModified(ClientePeer::NOMBRE)) $criteria->add(ClientePeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(ClientePeer::TELEFONO)) $criteria->add(ClientePeer::TELEFONO, $this->telefono);
		if ($this->isColumnModified(ClientePeer::DIRECCION)) $criteria->add(ClientePeer::DIRECCION, $this->direccion);
		if ($this->isColumnModified(ClientePeer::ID_PROV)) $criteria->add(ClientePeer::ID_PROV, $this->id_prov);
		if ($this->isColumnModified(ClientePeer::ID_CIUDAD)) $criteria->add(ClientePeer::ID_CIUDAD, $this->id_ciudad);
		if ($this->isColumnModified(ClientePeer::EMAIL)) $criteria->add(ClientePeer::EMAIL, $this->email);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ClientePeer::DATABASE_NAME);
		$criteria->add(ClientePeer::ID_CLIE, $this->id_clie);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdClie();
	}

	/**
	 * Generic method to set the primary key (id_clie column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdClie($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdClie();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Cliente (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setApellido($this->getApellido());
		$copyObj->setNombre($this->getNombre());
		$copyObj->setTelefono($this->getTelefono());
		$copyObj->setDireccion($this->getDireccion());
		$copyObj->setIdProv($this->getIdProv());
		$copyObj->setIdCiudad($this->getIdCiudad());
		$copyObj->setEmail($this->getEmail());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getVentas() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addVenta($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdClie(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Cliente Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ClientePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ClientePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Ciudad object.
	 *
	 * @param      Ciudad $v
	 * @return     Cliente The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCiudadRelatedByIdProv(Ciudad $v = null)
	{
		if ($v === null) {
			$this->setIdProv(NULL);
		} else {
			$this->setIdProv($v->getIdProvincia());
		}

		$this->aCiudadRelatedByIdProv = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Ciudad object, it will not be re-added.
		if ($v !== null) {
			$v->addClienteRelatedByIdProv($this);
		}

		return $this;
	}


	/**
	 * Get the associated Ciudad object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Ciudad The associated Ciudad object.
	 * @throws     PropelException
	 */
	public function getCiudadRelatedByIdProv(PropelPDO $con = null)
	{
		if ($this->aCiudadRelatedByIdProv === null && ($this->id_prov !== null)) {
			$this->aCiudadRelatedByIdProv = CiudadQuery::create()
				->filterByClienteRelatedByIdProv($this) // here
				->findOne($con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCiudadRelatedByIdProv->addClientesRelatedByIdProv($this);
			 */
		}
		return $this->aCiudadRelatedByIdProv;
	}

	/**
	 * Declares an association between this object and a Ciudad object.
	 *
	 * @param      Ciudad $v
	 * @return     Cliente The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCiudadRelatedByIdCiudad(Ciudad $v = null)
	{
		if ($v === null) {
			$this->setIdCiudad(NULL);
		} else {
			$this->setIdCiudad($v->getIdciudad());
		}

		$this->aCiudadRelatedByIdCiudad = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Ciudad object, it will not be re-added.
		if ($v !== null) {
			$v->addClienteRelatedByIdCiudad($this);
		}

		return $this;
	}


	/**
	 * Get the associated Ciudad object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Ciudad The associated Ciudad object.
	 * @throws     PropelException
	 */
	public function getCiudadRelatedByIdCiudad(PropelPDO $con = null)
	{
		if ($this->aCiudadRelatedByIdCiudad === null && ($this->id_ciudad !== null)) {
			$this->aCiudadRelatedByIdCiudad = CiudadQuery::create()->findPk($this->id_ciudad, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aCiudadRelatedByIdCiudad->addClientesRelatedByIdCiudad($this);
			 */
		}
		return $this->aCiudadRelatedByIdCiudad;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('Venta' == $relationName) {
			return $this->initVentas();
		}
	}

	/**
	 * Clears out the collVentas collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addVentas()
	 */
	public function clearVentas()
	{
		$this->collVentas = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collVentas collection.
	 *
	 * By default this just sets the collVentas collection to an empty array (like clearcollVentas());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initVentas($overrideExisting = true)
	{
		if (null !== $this->collVentas && !$overrideExisting) {
			return;
		}
		$this->collVentas = new PropelObjectCollection();
		$this->collVentas->setModel('Venta');
	}

	/**
	 * Gets an array of Venta objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Cliente is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Venta[] List of Venta objects
	 * @throws     PropelException
	 */
	public function getVentas($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collVentas || null !== $criteria) {
			if ($this->isNew() && null === $this->collVentas) {
				// return empty collection
				$this->initVentas();
			} else {
				$collVentas = VentaQuery::create(null, $criteria)
					->filterByCliente($this)
					->find($con);
				if (null !== $criteria) {
					return $collVentas;
				}
				$this->collVentas = $collVentas;
			}
		}
		return $this->collVentas;
	}

	/**
	 * Sets a collection of Venta objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $ventas A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setVentas(PropelCollection $ventas, PropelPDO $con = null)
	{
		$this->ventasScheduledForDeletion = $this->getVentas(new Criteria(), $con)->diff($ventas);

		foreach ($ventas as $venta) {
			// Fix issue with collection modified by reference
			if ($venta->isNew()) {
				$venta->setCliente($this);
			}
			$this->addVenta($venta);
		}

		$this->collVentas = $ventas;
	}

	/**
	 * Returns the number of related Venta objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Venta objects.
	 * @throws     PropelException
	 */
	public function countVentas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collVentas || null !== $criteria) {
			if ($this->isNew() && null === $this->collVentas) {
				return 0;
			} else {
				$query = VentaQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCliente($this)
					->count($con);
			}
		} else {
			return count($this->collVentas);
		}
	}

	/**
	 * Method called to associate a Venta object to this object
	 * through the Venta foreign key attribute.
	 *
	 * @param      Venta $l Venta
	 * @return     Cliente The current object (for fluent API support)
	 */
	public function addVenta(Venta $l)
	{
		if ($this->collVentas === null) {
			$this->initVentas();
		}
		if (!$this->collVentas->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddVenta($l);
		}

		return $this;
	}

	/**
	 * @param	Venta $venta The venta object to add.
	 */
	protected function doAddVenta($venta)
	{
		$this->collVentas[]= $venta;
		$venta->setCliente($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Cliente is new, it will return
	 * an empty collection; or if this Cliente has previously
	 * been saved, it will retrieve related Ventas from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Cliente.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Venta[] List of Venta objects
	 */
	public function getVentasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = VentaQuery::create(null, $criteria);
		$query->joinWith('Producto', $join_behavior);

		return $this->getVentas($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_clie = null;
		$this->apellido = null;
		$this->nombre = null;
		$this->telefono = null;
		$this->direccion = null;
		$this->id_prov = null;
		$this->id_ciudad = null;
		$this->email = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collVentas) {
				foreach ($this->collVentas as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collVentas instanceof PropelCollection) {
			$this->collVentas->clearIterator();
		}
		$this->collVentas = null;
		$this->aCiudadRelatedByIdProv = null;
		$this->aCiudadRelatedByIdCiudad = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ClientePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseCliente:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseCliente
