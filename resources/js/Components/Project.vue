<template>
    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="border-t">
            <inertia-link
                class="px-6 py-4 flex items-center focus:text-indigo-500"
                :href="route('projects.edit', project.id)"
            >
                {{ project.name }}
                <svg
                    v-if="project.deleted_at"
                    class="flex-shrink-0 w-3 h-3 fill-gray-400 ml-2" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                >
                    <path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z" />
                </svg>
            </inertia-link>
        </td>
        <td class="border-t">
            <inertia-link
                class="px-6 py-4 flex items-center"
                :href="route('projects.edit', project.id)"
            >
                {{ project.excerpt }}
            </inertia-link>
        </td>
        <td class="border-t">
            <inertia-link
                class="px-6 py-4 flex items-center"
                :href="route('projects.edit', project.id)"
            >
                {{ project.user.name }}
            </inertia-link>
        </td>
        <td class="border-t w-px">
            <inertia-link
                class="px-4 flex items-center"
                :href="route('projects.edit', project.id)"
            >
                <svg
                    class="block w-6 h-6 fill-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <polygon points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707" />
                </svg>
            </inertia-link>
        </td>
    </tr>
</template>

<script>
    export default {
        name: "Project",
        props: {
            project: Object,
        }
    }
</script>
