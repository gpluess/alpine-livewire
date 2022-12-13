<div>
     <div class="flex items-center space-x-4">
          <div x-data x-menu class="relative">
               <button x-menu:button class="flex items-center gap-2 bg-white pl-5 pr-3 py-2.5 rounded-md shadow">
                    <span>Options</span>

                    <!-- Heroicon: chevron-down -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
               </button>

               <div
                       x-menu:items
                       x-transition.origin.top.right
                       class="absolute right-0 w-64 mt-2 z-10 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-md py-1 outline-none"
                       x-cloak
               >
                    <a
                            x-menu:item
                            wire:key="item-1"
                            href="#" x-on:click="$wire.increment()"
                            :class="{
                'bg-cyan-500/10 text-gray-900': $menuItem.isActive,
                'text-gray-600': ! $menuItem.isActive,
                'opacity-50 cursor-not-allowed': $menuItem.isDisabled,
            }"
                            class="block w-full px-4 py-2 text-sm transition-colors"
                    >
                         x-on:click="$wire.increment()"
                    </a>
                    <a
                            x-menu:item
                            wire:key="item-2"
                            href="#" @click="$wire.increment()"
                            :class="{
                'bg-cyan-500/10 text-gray-900': $menuItem.isActive,
                'text-gray-600': ! $menuItem.isActive,
                'opacity-50 cursor-not-allowed': $menuItem.isDisabled,
            }"
                            class="block w-full px-4 py-2 text-sm transition-colors"
                    >
                         @click="$wire.increment()"
                    </a>
                    <a
                            x-menu:item
                            wire:key="item-3"
                            href="#" wire:click="increment"
                            :class="{
                'bg-cyan-500/10 text-gray-900': $menuItem.isActive,
                'text-gray-600': ! $menuItem.isActive,
                'opacity-50 cursor-not-allowed': $menuItem.isDisabled,
            }"
                            class="block w-full px-4 py-2 text-sm transition-colors"
                    >
                         wire:click="increment"
                    </a>
                    <a
                            x-menu:item
                            wire:key="item-4"
                            href="#"
                            :class="{
                'bg-cyan-500/10 text-gray-900': $menuItem.isActive,
                'text-gray-600': ! $menuItem.isActive,
                'opacity-50 cursor-not-allowed': $menuItem.isDisabled,
            }"
                            class="block w-full px-4 py-2 text-sm transition-colors"
                            disabled
                    >
                         Disabled
                    </a>
               </div>
          </div>
          <span>{{ $value }}</span>
     </div>
</div>
