<x-mail::message>
# Nuevo Post Pendiente de Aprobación

Se ha creado un nuevo post que requiere su revisión y aprobación.

<x-mail::panel>
Un nuevo post titulado "{{ $post->title }}".
</x-mail::panel>

<x-mail::table>
| Detalle       | Información                                     |
| ------------- | ------------------------------------------------|
| Título        | {{ $post->title }}                              |
| Categoría     | {{ $post->category }}                           |
| Fecha         | {{ $post->created_at->format('d/m/Y H:i') }}    |
</x-mail::table>

<x-mail::button :url="route('post.show', $post)">
Ver Post
</x-mail::button>

Gracias por su atención,<br>
{{ config('app.name') }}
</x-mail::message>
