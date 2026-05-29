<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use InvalidArgumentException;

/**
 * Lightweight helper model for ad-hoc read queries.
 * Security: blocks non-SELECT statements and supports bound params.
 */
class CustomModel
{
    protected ConnectionInterface $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }

    public function getUser(): array
    {
        return $this->db->table('cmc_admin')->get()->getResultArray();
    }

    /**
     * Execute a SELECT query safely with optional bound parameters.
     *
     * @param string $sql    SQL string. MUST start with SELECT / WITH (CTE).
     * @param array  $params Bound parameters for placeholders.
     */
    public function executeSelect(string $sql, array $params = []): array
    {
        $trim = ltrim($sql);

        // Allow CTEs (WITH ...) and plain SELECT.
        if (!preg_match('/^(SELECT|WITH)\b/i', $trim)) {
            throw new InvalidArgumentException('Only SELECT queries are allowed.');
        }

        // Block stacked queries.
        if (strpos($trim, ';') !== false) {
            throw new InvalidArgumentException('Stacked queries are not allowed.');
        }

        $query = $this->db->query($sql, $params);
        return $query->getResultArray();
    }

    /**
     * Backwards compatible wrapper. Prefer executeSelect().
     * NOTE: This will still block non-SELECT and stacked queries.
     */
    public function executeQuery(string $sql): array
    {
        return $this->executeSelect($sql, []);
    }
}
