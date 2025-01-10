@if (!isset($token))
        @redirect('/')
@endif
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>
        <script>
            function login(token) {
                console.log('login');
                if (window?.Android?.notifyApp) {
                    console.log('login notify app');
                    window.Android.notifyApp(
                        JSON.stringify({action: 'login', body: token})
                    );
                }
            }

            window.onload = function () {
                console.log('onload')
                const token = @json($token);
                login(token);
            };

            window.addEventListener('htmx:configRequest', function (event) {
                const token = @json($token);
                event.detail.headers['Authorization'] = `Bearer ${token}`;
            });
        </script>
    </head>
    <body class="h-full">
    <main class="relative isolate min-h-full">
        <img src="https://images.unsplash.com/photo-1545972154-9bb223aac798?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3050&q=80&exp=8&con=-15&sat=-75" alt="" class="absolute inset-0 -z-10 size-full object-cover object-top">
        <div class="mx-auto max-w-7xl px-6 py-32 text-center sm:py-40 lg:px-8">
            <p class="text-base/8 font-semibold text-white">404</p>
            <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl">Page not found</h1>
            <p class="mt-6 text-pretty text-lg font-medium text-white/70 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="mt-10 flex justify-center" hx-post="/api/notify">
                <div class="border border-white rounded-lg">
                    <a href="#" class="h-full w-full block text-xl font-semibold text-white">Notify</a>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>
