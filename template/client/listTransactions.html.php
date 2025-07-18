<?php
$transactions = [];
?>
<!-- Main Content -->
    <main class="p-2 w-[100%] flex justify-center">
        <div class="bg-black border border-gray-600 rounded-3xl p-4  w-[55%]">

            <!-- Filtres de recherche et boutons -->
            <form method="get" class="flex items-center justify-between mb-8 space-x-2">
                <!-- Filtre par date -->
                <div class="relative">
                    <input
                        type="date"
                        name="date"
                        value="<?= htmlspecialchars($filters['date'] ?? '') ?>"
                        class="bg-gray-200 rounded-full px-4 py-3 text-gray-600 outline-none flex-1 min-w-[200px]"
                    />
                </div>
                <!-- Filtre par type -->
                <div class="relative">
                    <input
                        type="text"
                        name="type"
                        placeholder="Recherche par type"
                        value="<?= htmlspecialchars($filters['type'] ?? '') ?>"
                        class="bg-gray-200 rounded-full px-4 py-3 text-gray-600 outline-none flex-1 min-w-[200px]"
                    />
                </div>
                <!-- Bouton Confirmer -->
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-colors">
                    Confirmer
                </button>
                <!-- Croix pour réinitialiser -->
                <a href="/client/transactions" class="text-gray-400 hover:text-white px-3 py-3" title="Réinitialiser">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </a>
                <!-- Bouton Retourner -->
                <a href="/client/dashboard" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-colors">
                    Retourner
                </a>
            </form>

            <!-- Transactions List Container -->
            <div class="bg-black border border-gray-600 rounded-2xl p-6 mb-6">
                <div class="space-y-4">
                    <?php foreach ($transactions as $transaction): ?>
                        <div class="flex items-center justify-between py-3">
                            <div>
                                <div class="text-white font-medium text-lg"><?= htmlspecialchars($transaction['typetransaction']) ?></div>
                                <div class="text-gray-400 text-sm"><?= htmlspecialchars($transaction['date']) ?></div>
                            </div>
                            <div class="<?= $transaction['montant'] > 0 ? 'text-green-400' : 'text-red-400' ?> font-bold text-lg">
                                <?= ($transaction['montant'] > 0 ? '+' : '') . number_format($transaction['montant'], 2) ?> FCFA
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                    <?php if (empty($transactions)): ?>
                        <div class="text-gray-400 text-center">Aucune transaction trouvée.</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center space-x-2 mt-4">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?<?= http_build_query(array_merge($filters, ['page' => $i])) ?>"
                       class="<?= $i == $page ? 'bg-orange-500 text-white' : 'bg-gray-800 text-white' ?> px-3 py-2 rounded font-medium">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </main>

