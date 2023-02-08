<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container mx-auto">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <h1 class="text-center m-4 p-4 text-3xl">CURD OPERATION</h1>
                    <div class="">
                        <a href="">
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md mb-5">Add Data</button>
                        </a>
                    </div>
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-700">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    First
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Last
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Handle
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Larry
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Wild
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @twitter
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @twitter
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>