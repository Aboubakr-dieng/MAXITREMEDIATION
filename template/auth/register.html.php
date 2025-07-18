<div class="bg-black border-2 border-gray-700 rounded-lg p-8 w-full max-w-6xl shadow-lg shadow-orange-500/50">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white">
                MAX <span class="text-orange-500">IT</span>
            </h1>
        </div>

        <!-- Form -->
        <form class="space-y-6 text-white" action="/register" method="post" enctype="multipart/form-data">
            <!-- Row 1: Nom complet et Adresse -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        Nom  <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="nom"
                        placeholder="Votre nom complet"
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        Prénom <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="prenom"
                        placeholder="Votre prénom"
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
            </div>

            <!-- Row 2: Prénom et Téléphone -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        Adresse <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="adresse"
                        placeholder="Votre adresse"
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        login <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="tel" 
                        name="login"
                        placeholder="+221 XXX XX XX"
                        class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
            </div>

            <!-- Row 3: Numéros de carte d'identité -->
            <div class=" flex gap-4 flex-colum">
                <div class="w-[123%]">
                    <label class="w-[-50%] flex flex-colum text-white text-sm font-medium mb-2">
                        Numéro carte d'identité national<span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="numero_carte_identite"
                        placeholder="1234567890987654"
                        class="w-[100%] px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
                <div class="w-[123%]">
                    <label class="w-[-50%] flex flex-colum text-white text-sm font-medium mb-2">
                        password <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="password" 
                        name="password"
                        placeholder="Mot de passe"
                        class="w-[100%] px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    />
                </div>
            </div>

            <!-- Row 4: Upload zones -->
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        Photo recto de la carte CNI <span class="text-red-500">*</span>
                    </label>
                    <div class="upload-zone rounded-md h-32 flex flex-col items-center justify-center cursor-pointer">
                        <svg class="w-8 h-8 text-gray-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-xs text-gray-600 text-center">Cliquez pour uploader recto</span>
                    </div>
                    <input type="file" name="photo_recto" class="hidden" accept="image/*" />
                </div>
                <div>
                    <label class="block text-white text-sm font-medium mb-2">
                        Photo verso de la carte CNI <span class="text-red-500">*</span>
                    </label>
                    <div class="upload-zone rounded-md h-32 flex flex-col items-center justify-center cursor-pointer">
                        <svg class="w-8 h-8 text-gray-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-xs text-gray-600 text-center">Cliquez pour uploader verso</span>
                    </div>
                    <input type="file" name="photo_verso" class="hidden" accept="image/*" />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button 
                    type="submit" 
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105"
                >
                    Créer Compte
                </button>
            </div>
        </form>
        <script>
document.querySelectorAll('.upload-zone').forEach(function(zone, idx) {
    zone.addEventListener('click', function() {
        // Sélectionne le bon input file dans la même colonne
        let input = zone.parentElement.querySelector('input[type="file"]');
        if (input) input.click();
    });
});
</script>
    </div>
