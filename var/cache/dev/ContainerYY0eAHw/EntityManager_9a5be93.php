<?php

namespace ContainerYY0eAHw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf32bb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbbb8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties952c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getConnection', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getMetadataFactory', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getExpressionBuilder', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'beginTransaction', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getCache', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'transactional', array('func' => $func), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'commit', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->commit();
    }

    public function rollback()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'rollback', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getClassMetadata', array('className' => $className), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'createQuery', array('dql' => $dql), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'createNamedQuery', array('name' => $name), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'createQueryBuilder', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'flush', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'clear', array('entityName' => $entityName), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->clear($entityName);
    }

    public function close()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'close', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->close();
    }

    public function persist($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'persist', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'remove', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'refresh', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'detach', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'merge', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'contains', array('entity' => $entity), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getEventManager', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getConfiguration', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'isOpen', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getUnitOfWork', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getProxyFactory', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'initializeObject', array('obj' => $obj), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'getFilters', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'isFiltersStateClean', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'hasFilters', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return $this->valueHolderf32bb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbbb8f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf32bb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf32bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf32bb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__get', ['name' => $name], $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        if (isset(self::$publicProperties952c6[$name])) {
            return $this->valueHolderf32bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32bb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf32bb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32bb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf32bb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__isset', array('name' => $name), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32bb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf32bb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__unset', array('name' => $name), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32bb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf32bb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__clone', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        $this->valueHolderf32bb = clone $this->valueHolderf32bb;
    }

    public function __sleep()
    {
        $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, '__sleep', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;

        return array('valueHolderf32bb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbbb8f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbbb8f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbbb8f && ($this->initializerbbb8f->__invoke($valueHolderf32bb, $this, 'initializeProxy', array(), $this->initializerbbb8f) || 1) && $this->valueHolderf32bb = $valueHolderf32bb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf32bb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf32bb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
