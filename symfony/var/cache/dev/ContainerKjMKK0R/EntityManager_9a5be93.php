<?php

namespace ContainerKjMKK0R;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder44293 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer54ab5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb13ea = [
        
    ];

    public function getConnection()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getConnection', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getMetadataFactory', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getExpressionBuilder', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'beginTransaction', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getCache', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getCache();
    }

    public function transactional($func)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'transactional', array('func' => $func), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->transactional($func);
    }

    public function commit()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'commit', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->commit();
    }

    public function rollback()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'rollback', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getClassMetadata', array('className' => $className), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'createQuery', array('dql' => $dql), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'createNamedQuery', array('name' => $name), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'createQueryBuilder', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'flush', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'clear', array('entityName' => $entityName), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->clear($entityName);
    }

    public function close()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'close', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->close();
    }

    public function persist($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'persist', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'remove', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'refresh', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'detach', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'merge', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getRepository', array('entityName' => $entityName), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'contains', array('entity' => $entity), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getEventManager', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getConfiguration', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'isOpen', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getUnitOfWork', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getProxyFactory', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'initializeObject', array('obj' => $obj), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'getFilters', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'isFiltersStateClean', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'hasFilters', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return $this->valueHolder44293->hasFilters();
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

        $instance->initializer54ab5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder44293) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44293 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder44293->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__get', ['name' => $name], $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        if (isset(self::$publicPropertiesb13ea[$name])) {
            return $this->valueHolder44293->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44293;

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

        $targetObject = $this->valueHolder44293;
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
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44293;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder44293;
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
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__isset', array('name' => $name), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44293;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder44293;
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
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__unset', array('name' => $name), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44293;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder44293;
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
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__clone', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        $this->valueHolder44293 = clone $this->valueHolder44293;
    }

    public function __sleep()
    {
        $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, '__sleep', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;

        return array('valueHolder44293');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer54ab5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer54ab5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer54ab5 && ($this->initializer54ab5->__invoke($valueHolder44293, $this, 'initializeProxy', array(), $this->initializer54ab5) || 1) && $this->valueHolder44293 = $valueHolder44293;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44293;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44293;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
