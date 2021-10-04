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
public class MarcaDAO {
    
    public List<Marca> search(){
        
    try{    
        Connection con = ConnectionFactory.getConnection();
        
        List<Marca> lista = new ArrayList();
        
        String sql = "SELECT * FROM marca WHERE 1";
        
        PreparedStatement stmt = con.prepareStatement(sql);
        
        ResultSet rs = stmt.executeQuery();
        
        while(rs.next()){
            
            Marca obj = new Marca();
            
            obj.setNomeMarca(rs.getString("nomeMarca"));
            
            lista.add(obj);
        }
        
        return lista;
        
        
    }catch(SQLException ex){
        Logger.getLogger(ProdutoDAO.class.getName()).log(Level.SEVERE, null, ex);
    }finally{
        //ConnectionFactory.closeConnection(con, stmt);
        }
        return null;
    
    }
 
}
