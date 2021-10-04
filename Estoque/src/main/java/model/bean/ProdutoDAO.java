/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model.bean;

import connection.ConnectionFactory;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Aluno
 */
public class ProdutoDAO {
    
    public void create(Produto p){
    
    try{    
        Connection con = ConnectionFactory.getConnection();
        PreparedStatement stmt = null;
        
        stmt = con.prepareStatement("INSERT INTO produto (codigo, descricao, preco, idMarca, idCor) VALUES (?,?,?,?,?)");
        
        stmt.setInt(1,p.getCodigo());
        stmt.setString(2,p.getDescricao());
        stmt.setDouble(3,p.getPreco());
        stmt.setDouble(4,p.getIdMarca());
        stmt.setDouble(5,p.getIdCor());
                
        stmt.execute();   
        
    }catch(SQLException ex){
        Logger.getLogger(ProdutoDAO.class.getName()).log(Level.SEVERE, null, ex);
    }finally{
        //ConnectionFactory.closeConnection(con, stmt);
        } 
    }
}  
