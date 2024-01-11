<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <main class="mx-auto max-w-6xl py-6 h-full">
        <div class="flex items-center justify-center h-full">
            <div class="flex min-h-full flex-col justify-center px-6     lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Hoşgeldin! Kaydını Giriş Yap</h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="/user/success_register" method="POST">
                        <div>
                            <label for="kullanici" class="block text-sm font-medium leading-6 text-gray-900">Kullanıcı Adı</label>
                            <div class="mt-2">
                                <input id="email" name="kullanici" type="text" autocomplete="text" placeholder="Kullanıcı" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 ps-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Adresi</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" placeholder="Email Adresi" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 ps-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="parola" class="block text-sm font-medium leading-6 text-gray-900">Parola</label>
                            <div class="mt-2">
                                <input id="password" name="parola" type="password" autocomplete="current-password" placeholder="Parola" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ps-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kayıt Ol</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        Zaten Bir Kaydın Varmı?
                        <a href="login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Giriş Yap!</a>
                    </p>
                </div>
            </div>

        </div>
    </main>
</body>

</html>