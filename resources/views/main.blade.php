<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@2.0.4"
            integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+"
            crossorigin="anonymous"></script>
</head>
<body class="h-full">
<div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
    <div class="absolute -top-80 left-[max(6rem,33%)] -z-10 transform-gpu blur-3xl sm:left-1/2 md:top-20 lg:ml-20 xl:top-3 xl:ml-56"
         aria-hidden="true">
        <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
             style="clip-path: polygon(63.1% 29.6%, 100% 17.2%, 76.7% 3.1%, 48.4% 0.1%, 44.6% 4.8%, 54.5% 25.4%, 59.8% 49.1%, 55.3% 57.9%, 44.5% 57.3%, 27.8% 48%, 35.1% 81.6%, 0% 97.8%, 39.3% 100%, 35.3% 81.5%, 97.2% 52.8%, 63.1% 29.6%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <p class="text-base/7 font-semibold text-indigo-600">Deploy faster</p>
            <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">A better
                workflow</h1>
            <p class="mt-6 text-xl/8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh
                sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam
                nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
            <div class="relative lg:order-last lg:col-span-5">
                <svg class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]"
                     aria-hidden="true">
                    <defs>
                        <pattern id="e87443c8-56e4-4c20-9111-55b82fa704e3" width="200" height="200"
                                 patternUnits="userSpaceOnUse">
                            <path d="M0.5 0V200M200 0.5L0 0.499983"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" stroke-width="0"
                          fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)"/>
                </svg>
                <figure class="border-l border-indigo-600 pl-8">
                    <blockquote class="text-xl/8 font-semibold tracking-tight text-gray-900">
                        <p>“Vel ultricies morbi odio facilisi ultrices accumsan donec lacus purus. Lectus nibh
                            ullamcorper ac dictum justo in euismod. Risus aenean ut elit massa. In amet aliquet eget
                            cras. Sem volutpat enim tristique.”</p>
                    </blockquote>
                    <figcaption class="mt-8 flex gap-x-4">
                        <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="" class="mt-1 size-10 flex-none rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <div class="font-semibold text-gray-900">Brenna Goyette</div>
                            <div class="text-gray-600">@brenna</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="max-w-xl text-base/7 text-gray-700 lg:col-span-7">
                <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed
                    amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus
                    varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus
                    enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span><strong class="font-semibold text-gray-900">Push to deploy.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span><strong class="font-semibold text-gray-900">SSL certificates.</strong> Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z"/>
                            <path fill-rule="evenodd"
                                  d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span><strong class="font-semibold text-gray-900">Database backups.</strong> Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</span>
                    </li>
                </ul>
                <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id
                    blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris
                    varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem
                    vel integer orci.</p>
                <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis
                    arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh.
                    Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi.
                    Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
