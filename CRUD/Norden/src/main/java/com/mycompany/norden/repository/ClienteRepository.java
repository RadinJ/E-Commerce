/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.norden.repository;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

/**
 *
 * @author ovo
 */
public class ClienteRepository extends AbstractFacade<Cliente> {    
    
        public ClienteRepository() {
        super(Cliente.class);
        this.factory =  Persistence.createEntityManagerFactory("ecommerce");
        this.entityManager =  this.factory.createEntityManager();        
    }  
    
  
    private final EntityManagerFactory factory;
    private final EntityManager entityManager;       
  
    EntityManager getEntityManager(){
        return entityManager;
    }

  }


