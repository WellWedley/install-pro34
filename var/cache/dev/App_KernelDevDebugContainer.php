<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZRlmk91\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZRlmk91/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZRlmk91.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZRlmk91\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZRlmk91\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZRlmk91',
    'container.build_id' => '9730bb8c',
    'container.build_time' => 1694538589,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZRlmk91');
