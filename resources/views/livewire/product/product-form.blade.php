<div>
    <!-- Start coding here -->
    <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
        <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
            <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Buscar</label>
                <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                </div>
            </form>
            </div>
            <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
            <button wire:click="$set('openCreate', true)"  type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Agregar Producto
            </button>
            <div class="flex items-center w-full space-x-3 md:w-auto">
                <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
                Aciones
                </button>
                <div id="actionsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                    <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                </div>
                </div>
                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                </svg>
                Filter
                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                    Category
                </h6>
                <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                    <li class="flex items-center">
                    <input id="apple" type="checkbox" value=""
                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                        Apple (56)
                    </label>
                    </li>
                    <li class="flex items-center">
                    <input id="fitbit" type="checkbox" value=""
                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                        Fitbit (56)
                    </label>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>       
    </div>

    <!-- table -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Codigo Barras
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio Compra
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio venta
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Acciones</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" wire:key="{{ $product->id }}-product">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->id }}</th>

                        <td class="px-6 py-3">{{ $product->name }}</td>
                        <td class="px-6 py-3">{{ $product->barcode }}</td>
                        <td class="px-6 py-3">S/. {{ $product->purchase_price }}</td>
                        <td class="px-6 py-3">S/. {{ $product->sale_price }}</td>
                        <td class="px-6 py-3">{{ $product->stock }}</td>
                        <td class="px-6 py-3">{{ $product->categoria->nombre }}</td>
                        <td class="px-6 py-3">{{ $product->estado->nombre }}</td>
                        <td class="px-6 py-3 flex items-center justify-end">
                            <a wire:click="delete({{ $product->id }}, '{{ $product->name }}')" class="rounded-lg block py-2 px-4 text-sm text-gray-700 hover:bg-red-400 dark:hover:bg-red-600 dark:text-gray-200 dark:hover:text-white">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>  
                            </a>
                            <a wire:click="edit({{ $product->id }})" class="rounded-lg block py-2 px-4 hover:bg-green-400 dark:hover:bg-green-600 dark:hover:text-white">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>  
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  
    </div>

    {{ $products->links() }}

    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
        <!-- Aquí se muestra el número de elementos mostrados y el total de elementos -->
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span class="font-semibold text-gray-900 dark:text-white">{{ $products->firstItem() }}-{{ $products->lastItem() }}</span>
            of
            <span class="font-semibold text-gray-900 dark:text-white">{{ $products->total() }}</span>
        </span>
    
        <!-- Aquí se muestran los enlaces de paginación -->
        {{ $products->links() }}
    </nav>

    @if ($openCreate)
        <x-modal-edit-flow>
            <x-slot name="header">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Crear Producto
                </h3>
                <button wire:click="$set('openCreate', false)" data-modal-toggle="2" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </x-slot>

            <form wire:submit="save">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <x-label-flow>Nombre</x-label-flow>
                        <x-input-flow type="text" name="name" wire:model="name" required/>
                    </div>
                    <div>
                        <x-label-flow>Codigo de Barras</x-label-flow>
                        <x-input-flow type="text" name="barcode" wire:model="barcode" required/>
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div>
                        <x-label-flow>Precio Compra</x-label-flow>
                        <x-input-flow type="number" name="purchase_price" wire:model="purchase_price" step="0.01" required/>
                    </div>
                    <div>
                        <x-label-flow>Precio Venta</x-label-flow>
                        <x-input-flow type="number" name="sale_price" wire:model="sale_price" step="0.01" required/>
                    </div>
                    <div>
                        <x-label-flow>Stock</x-label-flow>
                        <x-input-flow type="number" name="stock" wire:model="stock" required/>
                    </div>
                </div>
            
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <x-label-flow>Categorias</x-label-flow>
                        <x-select-flow  wire:model="category_id">
                            <option selected="">Selecione una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                            @endforeach
                        </x-select-flow>
                    </div>
                    <div>
                        <x-label-flow>Estados</x-label-flow>
                        <x-select-flow wire:model="state_id">
                            <option selected="">Selecione una opcion</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->nombre }}</option>
                            @endforeach
                        </x-select-flow>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Crear
                    </button>
                    <button type="button" wire:click="$set('openDelete', false)" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Cancelar
                    </button>
                </div>
            </form>
        </x-modal-edit-flow>
    @endif

    @if ($openEdit)
        <x-modal-edit-flow>
            <x-slot name="header">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Editar Producto
                </h3>
                <button wire:click="$set('openEdit', false)" data-modal-toggle="2" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </x-slot>

            <form wire:submit="update">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <x-label-flow>Nombre</x-label-flow>
                        <x-input-flow type="text" name="name" wire:model="productsEdit.name" required/>
                    </div>
                    <div>
                        <x-label-flow>Codigo de Barras</x-label-flow>
                        <x-input-flow type="text" name="barcode" wire:model="productsEdit.barcode" required/>
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div>
                        <x-label-flow>Precio Compra</x-label-flow>
                        <x-input-flow type="number" name="purchase_price" wire:model="productsEdit.purchase_price"  step="0.01" required/>
                    </div>
                    <div>
                        <x-label-flow>Precio Venta</x-label-flow>
                        <x-input-flow type="number" name="sale_price" wire:model="productsEdit.sale_price"  step="0.01" required/>
                    </div>
                    <div>
                        <x-label-flow>Stock</x-label-flow>
                        <x-input-flow type="number" name="stock" wire:model="productsEdit.stock" required/>
                    </div>
                </div>
            
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <x-label-flow>Categorias</x-label-flow>
                        <x-select-flow  wire:model="productsEdit.category_id">
                            <option selected="">Selecione una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                            @endforeach
                        </x-select-flow>
                    </div>
                    <div>
                        <x-label-flow>Estados</x-label-flow>
                        <x-select-flow wire:model="productsEdit.state_id">
                            <option selected="">Selecione una opcion</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->nombre }}</option>
                            @endforeach
                        </x-select-flow>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Actualizar
                    </button>
                    <button type="button" wire:click="$set('openEdit', false)" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Cancelar
                    </button>
                </div>
            </form>
        </x-modal-edit-flow>
    @endif

    @if ($openDelete)
        <x-modal-delete-flow maxWidth="lg">
            <x-slot  name="header">
                <button type="button" wire:click="$set('openDelete', false)" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Cerrar modal</span>
                </button>
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg> 
            </x-slot>

            <p class="mb-4 text-gray-500 dark:text-gray-300">¿Deseas eliminar el producto "{{ $productDeleteName }}" con ID "{{ $productDeleteId }}"? </p>

            <x-slot  name="footer">
                <button wire:click="$set('openDelete', false)" data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancelar
                </button>
                <button wire:click="destroy" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Si, estoy seguro
                </button>
            </x-slot>
        </x-modal-delete-flow>    
    @endif

    </div>
</div>
