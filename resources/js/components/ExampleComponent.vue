<template>
        <div class="relative bg-indigo-600">
          <!-- Overlapping background -->
          <div aria-hidden="true" class="hidden absolute bg-gray-50 w-full h-6 bottom-0 lg:block" />

          <div class="relative max-w-2xl mx-auto pt-16 px-4 text-center sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-6xl">
              <span class="block lg:inline">Simple pricing,</span>
              <span class="block lg:inline">no commitment.</span>
            </h1>
            <p class="mt-4 text-xl text-indigo-100">Everything you need, nothing you don't. Pick a plan that best suits your business.</p>
          </div>

          <h2 class="sr-only">Plans</h2>

          <div class="w-full  max-w-full justify-center px-2 py-2 sm:px-0">
    <TabGroup>
       <div class="relative mt-12 flex justify-center sm:mt-16">
      <TabList class="bg-blue-500 p-0.5 rounded-lg flex">
        <Tab
          v-for="category in Object.keys(categories)"
          as="template"
          :key="category"
          v-slot="{ selected }"
        >
          <button
            :class="[
             'relative max-w-xl py-2 px-6  text-sm leading-5 font-medium text-indigo-800 rounded-lg',
              'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-700 ring-white ring-opacity-60',
              selected
                ? 'bg-white shadow'
                : 'text-blue-100 hover:bg-white/[0.20] hover:text-white',
            ]"
          >
            {{ category }}
          </button>
        </Tab>
      </TabList>
      </div>
      <TabPanels class="mt-2">
        <TabPanel
          v-for="(prices, idx) in Object.values(categories)"
          :key="idx"
          :class="[
        
          ]"
        >
        <div class="relative space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3">
              <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-10 lg:pt-12">
                
              <div>
              
                <h3 class="text-white text-sm font-semibold uppercase tracking-wide"> Starter</h3>
                <div  v-for="price in prices"
              :key="price.id" class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                  <div class="mt-3 flex items-center">
                    <p class="text-white text-4xl font-extrabold tracking-tight"> {{ price.starter }}</p>
                    <div class="ml-4">
                      <p class="text-white text-sm">USD / mo</p>
                      <p class="text-indigo-200 text-sm">{{ price.paid }}</p>
                    </div>
                  </div>
                  <button type="button"
      @click="openModal"
 class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</button>
              </div>
              </div>
              <h4 class="sr-only">Features</h4>
              <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                </li>
              </ul>
               
              </div>
        <div class="bg-white ring-2 ring-indigo-700 shadow-md pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
              <div>
                <h3 class="text-indigo-600 text-sm font-semibold uppercase tracking-wide">Scale</h3>
                <div v-for="price in prices"
              :key="price.id" class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                  <div class="mt-3 flex items-center">
                    <p class="text-indigo-600 text-4xl font-extrabold tracking-tight">{{ price.scale }}</p>
                    <div class="ml-4">
                      <p class="text-gray-700 text-sm">USD / mo</p>
                      <p class="text-gray-500 text-sm">{{ price.paid }}</p>
                    </div>
                  </div>
                 <button type="button"
      @click="openModal"
 class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</button>
                </div>
              </div>
              <h4 class="sr-only">Features</h4>
              <ul role="list" class="border-gray-200 divide-gray-200 mt-7 border-t divide-y lg:border-t-0">
                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">Advanced invoicing</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">Easy to use accounting</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">Mutli-accounts</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">Tax planning toolkit</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">VAT &amp; VATMOSS filing</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-600 ml-4 text-sm font-medium">Free bank transfers</span>
                </li>
              </ul>
            </div>

             <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
              <div>
                <h3 class="text-white text-sm font-semibold uppercase tracking-wide">Growth</h3>
                <div v-for="price in prices"
              :key="price.id" class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                  <div class="mt-3 flex items-center">
                    <p class="text-white text-4xl font-extrabold tracking-tight">{{ price.growth }}</p>
                    <div class="ml-4">
                      <p class="text-white text-sm">USD / mo</p>
                      <p class="text-indigo-200 text-sm">{{ price.paid }}</p>
                    </div>
                  </div>
               <button type="button"
      @click="openModal"
 class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</button>
                </div>
              </div>
              <h4 class="sr-only">Features</h4>
              <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                </li>

                <li class="py-3 flex items-center">
                  <!-- Heroicon name: solid/check -->
                  <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-white ml-4 text-sm font-medium">Tax planning toolkit</span>
                </li>
              </ul>
            </div>
       
   
 

        </div>
                
            </TabPanel>
      
        </TabPanels>
      
     
    </TabGroup>
 
   </div>
  <!-- Modal -->
   <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" @close="closeModal">
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class=" px-4 text-center">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0"
            enter-to="opacity-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100"
            leave-to="opacity-0"
          >
       
            <DialogOverlay class="fixed inset-0" />
          </TransitionChild>

          <span class="inline-block h-full align-middle" aria-hidden="true">
            &#8203;
          </span>

          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <div
              class="inline-block h-64 p-8 align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:max-h-2xl sm:w-full"
            >
              <DialogTitle
                as="h3"
                class="text-lg font-medium leading-6 pt-6 text-gray-900"
              >
                Payment successful
              </DialogTitle>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Your payment has been successfully submitted. We’ve sent your
                  an email with all of the details of your order.
                </p>
              </div>

              <div class="mt-4 pt-8">
                <button
                  type="button"
                  class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                  @click="closeModal"
                >
                  Got it, thanks!
                </button>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
      
  </div>
</template>

<script>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel, TransitionRoot,
  TransitionChild,
  Dialog,
  DialogOverlay,
  DialogTitle, } from '@headlessui/vue'

export default {
  components: {
    TabGroup,
    TabList,
    Tab,
    TabPanels,
    TabPanel,
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle,
  },
  setup() {
    let categories = ref({
      'Monthly Billing': [
        {
          id: 1,
          starter: '$20',
          scale: '$50',
          growth: '$80',
          paid: 'Billed Monthly',
          shareCount: 2,
        },
        
      ],
    'Yearly Billing': [
        {
         id: 1,
          starter: '$30',
          scale: '$70',
          growth: '$100',
         paid: 'Billed Yearly',
          shareCount: 2,
        },
        
      ],
      
    })

      const isOpen = ref(false)
    return { categories,
     isOpen,
      closeModal() {
        isOpen.value = false
      },
      openModal() {
        isOpen.value = true
      },
    }
    },

  
}
</script>