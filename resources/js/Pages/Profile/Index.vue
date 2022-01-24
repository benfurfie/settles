<template>
    <Head title="Your Profile" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h1 class="text-xl font-semibold leading-tight text-gray-800">
                Personal Information
            </h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div>
                            <img src="" alt="">
                            <div>
                                <h2>{{ user.full_name }}</h2>
                                <p>Driver since {{ user.driver_since }}</p>
                            </div>
                        </div>


                        <p>Your profile below</p>
                        <ul>
                            <li><strong>First Name:</strong> {{ user.first_name }}</li>
                            <li><strong>Last Name:</strong> {{ user.last_name }}</li>
                            <li><strong>Email:</strong> {{ user.email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
    import { computed } from 'vue'
    import { usePage } from '@inertiajs/inertia-vue3'
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
    import { Head } from '@inertiajs/inertia-vue3';

    export default {

        setup() {
            const user = computed(() => usePage().props.value.auth.user)
            return { user }
        },

        components: {
            BreezeAuthenticatedLayout,
            Head,
        },
        
    }
</script>