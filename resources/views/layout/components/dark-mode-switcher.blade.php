<!-- BEGIN: Dark Mode Switcher-->
<div data-url="{{ route('dark-mode-switcher') }}" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-25 h-10 flex items-center justify-center z-50 mb-10 mr-10">
    <i data-lucide="moon" class="w-6 h-6 mr-0" style="color: #1d4ed8"></i>
    <i data-lucide="sun" class="w-6 h-6 mr-0" style="color: #1d4ed8"></i>
    <div class="dark-mode-switcher__toggle {{ $dark_mode ? 'dark-mode-switcher__toggle--active' : '' }} border" style="color: red"></div>
</div>
<!-- END: Dark Mode Switcher-->
