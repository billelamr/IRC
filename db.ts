import { createPool, Pool, PoolConnection } from 'mysql2';

// Créez un pool de connexions à la base de données
export const db: Pool = createPool({
  host: '127.0.0.1',
  user: 'root',
  password: 'pass',
  database: 'ts_server',
});

// Gestion des erreurs de connexion
db.getConnection((err: NodeJS.ErrnoException | null, connection: PoolConnection) => {
  if (err) {
    console.error('Erreur lors de la connexion à la base de données:', err);
    return;
  }
  console.log('Connexion à la base de données réussie.');

  // Vous pouvez maintenant utiliser la connexion pour effectuer des requêtes
  // Assurez-vous de libérer la connexion lorsque vous avez terminé avec elle.
  connection.release();
});

// Gestion des erreurs de pool
db.on('error', (err) => {
  console.error('Erreur du pool de connexions à la base de données:', err);
});
