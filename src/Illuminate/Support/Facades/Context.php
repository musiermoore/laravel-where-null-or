<?php

namespace Illuminate\Support\Facades;

/**
 * @method static \Illuminate\Log\Context\Repository add(string|array $key, mixed $value = null)
 * @method static \Illuminate\Log\Context\Repository addHidden(string|array $key, mixed $value = null)
 * @method static \Illuminate\Log\Context\Repository forget(string|array $key)
 * @method static \Illuminate\Log\Context\Repository forgetHidden(string|array $key)
 * @method static \Illuminate\Log\Context\Repository addIf(string $key, mixed $value)
 * @method static \Illuminate\Log\Context\Repository addHiddenIf(string $key, mixed $value)
 * @method static mixed get(string $key)
 * @method static mixed getHidden(string $key)
 * @method static array only(array $keys)
 * @method static array onlyHidden(array $keys)
 * @method static \Illuminate\Log\Context\Repository push(string $key, mixed ...$values)
 * @method static \Illuminate\Log\Context\Repository pushHidden(string $key, mixed ...$values)
 * @method static bool has(string $key)
 * @method static bool hasHidden(string $key)
 * @method static \Illuminate\Log\Context\Repository dehydrating(callable $callback)
 * @method static \Illuminate\Log\Context\Repository hydrated(callable $callback)
 * @method static array all()
 * @method static array allHidden()
 * @method static void isStackable(void $key)
 * @method static void isHiddenStackable(void $key)
 * @method static bool isEmpty()
 * @method static \Illuminate\Log\Context\Repository handleUnserializeExceptionsUsing(callable $callback)
 * @method static \Illuminate\Log\Context\Repository flush()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static \Illuminate\Database\Eloquent\Model restoreModel(\Illuminate\Contracts\Database\ModelIdentifier $value)
 *
 * @see \Illuminate\Log\Context\Repository
 */
class Context extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Illuminate\Log\Context\Repository::class;
    }
}