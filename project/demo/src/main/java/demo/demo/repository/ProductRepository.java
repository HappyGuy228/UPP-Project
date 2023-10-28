package demo.demo.repository;

import demo.demo.model.Products;

import java.util.List;
import java.util.Optional;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;


@Repository

public interface ProductRepository extends JpaRepository<Products, Integer> {

    String _query0 = "SELECT * FROM cars where car_id = :car_id";
    @Query(value = _query0, nativeQuery = true)
    Optional<Products> customFindById(@Param("car_id") int car_id);


    String _query1 = "SELECT * FROM cars";
    //String _query1 = "SELECT * FROM cars t WHERE t.car_id = 1";
    @Query(value = _query1, nativeQuery = true)
    //@Query("SELECT * FROM cars WHERE car_id = 1")
    Iterable<Products> joinString();
}
