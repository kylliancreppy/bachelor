<?php

namespace ContainerFMhwhxV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0cdf5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb71c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73265 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getConnection', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getMetadataFactory', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getExpressionBuilder', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'beginTransaction', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getCache', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'transactional', array('func' => $func), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'commit', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->commit();
    }

    public function rollback()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'rollback', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getClassMetadata', array('className' => $className), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'createQuery', array('dql' => $dql), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'createNamedQuery', array('name' => $name), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'createQueryBuilder', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'flush', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'clear', array('entityName' => $entityName), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->clear($entityName);
    }

    public function close()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'close', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->close();
    }

    public function persist($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'persist', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'remove', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'refresh', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'detach', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'merge', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'contains', array('entity' => $entity), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getEventManager', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getConfiguration', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'isOpen', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getUnitOfWork', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getProxyFactory', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'initializeObject', array('obj' => $obj), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'getFilters', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'isFiltersStateClean', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'hasFilters', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return $this->valueHolder0cdf5->hasFilters();
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

        $instance->initializerb71c6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0cdf5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0cdf5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0cdf5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__get', ['name' => $name], $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        if (isset(self::$publicProperties73265[$name])) {
            return $this->valueHolder0cdf5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cdf5;

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

        $targetObject = $this->valueHolder0cdf5;
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
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cdf5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0cdf5;
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
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__isset', array('name' => $name), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cdf5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0cdf5;
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
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__unset', array('name' => $name), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cdf5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0cdf5;
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
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__clone', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        $this->valueHolder0cdf5 = clone $this->valueHolder0cdf5;
    }

    public function __sleep()
    {
        $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, '__sleep', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;

        return array('valueHolder0cdf5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb71c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb71c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb71c6 && ($this->initializerb71c6->__invoke($valueHolder0cdf5, $this, 'initializeProxy', array(), $this->initializerb71c6) || 1) && $this->valueHolder0cdf5 = $valueHolder0cdf5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0cdf5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0cdf5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
