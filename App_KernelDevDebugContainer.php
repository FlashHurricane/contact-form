<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAGlMYl4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAGlMYl4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAGlMYl4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAGlMYl4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAGlMYl4\App_KernelDevDebugContainer([
    'container.build_hash' => 'AGlMYl4',
    'container.build_id' => '63bdd17e',
    'container.build_time' => 1689007280,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAGlMYl4');
