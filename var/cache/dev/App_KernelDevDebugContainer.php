<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX9EYSB2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX9EYSB2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX9EYSB2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX9EYSB2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX9EYSB2\App_KernelDevDebugContainer([
    'container.build_hash' => 'X9EYSB2',
    'container.build_id' => '57090508',
    'container.build_time' => 1668588874,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX9EYSB2');
