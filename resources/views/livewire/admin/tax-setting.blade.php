<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-page-heading pageHeading="Tax Settings" pageDesc="Edit your tax components here"></x-page-heading>

    {{-- Make action bar layout --}}
    <div class="my-4">
       
    </div>
    <div
        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-slate-200 dark:border-slate-700 overflow-hidden">
        <!-- Table with animated rows -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700">
                <thead class="bg-slate-50 dark:bg-slate-700/50 backdrop-blur-sm">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-300 uppercase tracking-wider transition-colors duration-300">
                            {{ __('Name') }}
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-300 uppercase tracking-wider transition-colors duration-300">
                            {{ __('Description') }}
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-300 uppercase tracking-wider transition-colors duration-300">
                            {{ __('Rate') }}
                        </th>
                            <th
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-300 uppercase tracking-wider transition-colors duration-300">
                            {{ __('Salary Threshold') }}
                        </th>
                        <th
                            class="px-6 py-3 text-right text-xs font-medium text-slate-500 dark:text-slate-300 uppercase tracking-wider transition-colors duration-300">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-slate-800 divide-y divide-slate-200 dark:divide-slate-700">
                    <!-- Table Row with enter animation -->
                   
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-all duration-200 animate-enter">
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-800 dark:text-slate-100 transition-colors duration-300">
                            <span class="inline-block transition-all duration-300 hover:translate-x-1 ease-in-out hover:underline">
                            
                            </span>
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-300 transition-colors duration-300 w-1/3">
                            <span class="inline-block transition-transform duration-300 hover:translate-x-1 text-pretty">
                             
                            </span>
                            
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-300 transition-colors duration-300">
                            <span class="inline-block transition-transform duration-300 hover:translate-x-1">
                              
                            </span>
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-300 transition-colors duration-300">
                            <span class="inline-block transition-transform duration-300 hover:translate-x-1">
                              
                            </span>
                        </td>
                        <td
                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium transition-colors duration-300">
                            <div class="flex justify-end space-x-2">
                               
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>