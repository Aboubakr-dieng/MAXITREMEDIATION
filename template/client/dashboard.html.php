<?php
$transactions = [];
?>
<!-- Main Content -->
    <main class="p-6 h-[90vh]   ">
        <div class="bg-black h-[80%] border border-gray-600 rounded-3xl p-8 max-w-5xl mx-auto">
            
            <!-- Top Row: Solde Compte, Total Balance, Dashboard, Ajouter compte -->
            <div class="flex items-center justify-between mb-4">
                <!-- Left Side -->

                <div class="flex items-center flex-direction-column h-[35%] w-[80%] space-x-6 flex-wrap space-x-6">
                    <div class="bg-orange-500 rounded-2xl p-4 flex items-center space-x-4 w-[70%]">
                        <div class="bg-black  p-3 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-white font-bold text-lg">Total Balance</div>
                            <div class="text-white text-2xl font-bold">
                                <?= number_format($Compte->$solde ?? 0, 2) ?> FCFA
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Right Side -->
                <div class="flex items-center space-x-4">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors ">
                        change
                    </button>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                        Ajouter un compte secondaire
                    </button>
                </div>
            </div>

            <!-- Bottom Row: Voir Transactions and Voir Plus -->
            <div class="flex items-center justify-between mb-8">
                <!-- <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                    Voir Transactions
                </button> -->
                
                <a href="/client/transactions" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium text-sm transition-colors">
                    Voir Plus
                </a>
            </div>

            <!-- Transactions List -->
            <div class="space-y-1">
                <?php foreach ($transactions as $transaction): ?>
                    <div class="flex items-center justify-between py-4 border-b border-gray-700 last:border-b-0">
                        <div>
                            <div class="text-white font-medium text-lg">
                                <?= htmlspecialchars($transaction['typetransaction'] ?? '---') ?>
                            </div>
                            <div class="text-gray-400 text-sm">
                                <?= htmlspecialchars($transaction['date'] ?? '') ?>
                            </div>
                        </div>
                        <div class="<?= ($transaction['montant'] ?? 0) > 0 ? 'text-green-400' : 'text-red-400' ?> font-bold text-lg">
                            <?= ((isset($transaction['montant']) && $transaction['montant'] > 0) ? '+' : '') . number_format($transaction['montant'] ?? 0, 2) ?> FCFA
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

