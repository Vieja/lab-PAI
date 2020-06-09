// https://medium.com/@dan_abramov/smart-and-dumb-components-7ca2f9a7c7d0

import React, {Component} from "react"
import ToDoList from "./components/ToDoList"
import Filter from "./components/Filter"
import AddNewTask from "./components/AddNewTask"
import Task from "./components/Task"

class App extends Component{
    constructor() {
        super()
        this.state = {
            newToDo : "",
            isFiltered : false,
            numTasks: 0,
            tasks : []
        }
    this.handleChangeFilter = this.handleChangeFilter.bind(this)
    this.handleNewToDo = this.handleNewToDo.bind(this)
    this.handleButtonClick = this.handleButtonClick.bind(this)
    this.handleTaskDone = this.handleTaskDone.bind(this)
    }
    
    handleChangeFilter(event) {
        const {name, checked} = event.target
        this.setState(prevState => {
            return {
                isFiltered : !prevState.isFiltered
            }
        })
    }
    
    handleNewToDo(event) {
        const {name, value} = event.target
        this.setState({
            [name]: value
        }) 
    }
    
    handleTaskDone(id) {
        this.setState(prevState => {
            const updated = prevState.tasks.map(todo => {
                if (todo.id == id) {
                    todo.done = !todo.done
                }
                return todo
            })
            return {
                tasks: updated
            }
        })
    }
    
    handleButtonClick = () => {
        this.setState(state => {
            const newTasks = state.tasks.concat({
                key : state.numTasks,
                id : state.numTasks,
                task : state.newToDo,
                done : false,
                handleChange : this.handleTaskDone
                }
            )
            
            return {
            tasks : newTasks,
            numTasks : state.numTasks + 1,
            newToDo : ''
            }
        })
    }
    
    
    
    render() {
        return (
            <div>
            <h1> Welcome to my To Do list! </h1>
            <content>
                    <Filter
                        handleChange={this.handleChangeFilter}
                        data={this.state}
                    />
                    <hr/>
                    <ToDoList
                        data={this.state.tasks}
                        hide={this.state.isFiltered}
                    />
                    <hr/>
                    <AddNewTask 
                        handleButtonClick={this.handleButtonClick}
                        handleNewToDo={this.handleNewToDo}
                        data={this.state}/>
            </content>
            </div>
        )
    }
}

export default App
