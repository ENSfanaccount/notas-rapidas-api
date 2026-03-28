<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $numero_reporte
 * @property string $cliente_nombre
 * @property string|null $cliente_email
 * @property string $departamento
 * @property string $categoria
 * @property string $nivel_urgencia
 * @property string $descripcion_corta
 * @property string|null $descripcion_detallada
 * @property string|null $tecnico_asignado
 * @property \Illuminate\Support\Carbon $fecha_reporte
 * @property \Illuminate\Support\Carbon|null $fecha_promesa
 * @property \Illuminate\Support\Carbon|null $fecha_resolucion
 * @property string|null $comentarios_tecnico
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereClienteEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereClienteNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereComentariosTecnico($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereDescripcionCorta($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereDescripcionDetallada($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereFechaPromesa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereFechaReporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereFechaResolucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereNivelUrgencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereNumeroReporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereTecnicoAsignado($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ticket whereUpdatedAt($value)
 */
	class Ticket extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $rol
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

