<?php
namespace Tests\Conjecto\SparqlQueryBuilder;
use Conjecto\SparqlQueryBuilder\Expr\Construct;
use Conjecto\SparqlQueryBuilder\Expr\Union;
use Conjecto\SparqlQueryBuilder\QueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: blaise
 * Date: 14/07/17
 * Time: 13:33
 */
class QueryBuilderTest extends TestCase
{
    public function testGetQuery() {
        $qb = new QueryBuilder();
        $qb->addConstruct("?s ?p ?o")
            ->prefix('foaf', 'http://xmlns.com/foaf/0.1/')
            ->where('?s ?p ?o');

        echo $qb->getQuery();
    }
}