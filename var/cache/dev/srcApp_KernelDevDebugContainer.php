<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVN1W3Fl\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVN1W3Fl/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVN1W3Fl.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVN1W3Fl\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVN1W3Fl\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VN1W3Fl',
    'container.build_id' => 'db62536b',
    'container.build_time' => 1576849076,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVN1W3Fl');
