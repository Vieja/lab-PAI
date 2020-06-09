import React, {Component} from "react"
import Task from "./Task"

function ToDoList(props) {
    
    var todoItems = []
    if (props.hide) {
        
        todoItems = props.data.filter(item=>!item.done).map(item => 
            <Task 
            key={item.key} 
            id={item.id} 
            task={item.task} 
            done={item.done} 
            handleChange={item.handleChange}/>)
            
    } else {
        todoItems = props.data.map(item => 
            <Task 
            key={item.key} 
            id={item.id} 
            task={item.task} 
            done={item.done} 
            handleChange={item.handleChange}/>)
    }
    
    return (
        <div>
            {todoItems}
        </div>
    )    
    
}

export default ToDoList