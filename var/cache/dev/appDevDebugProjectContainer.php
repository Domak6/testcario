<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJwdbsbk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJwdbsbk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJwdbsbk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJwdbsbk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJwdbsbk\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Jwdbsbk',
    'container.build_id' => '3ce07a72',
    'container.build_time' => 1539709644,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJwdbsbk');